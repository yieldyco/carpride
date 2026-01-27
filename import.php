<?php
require_once 'config.php';
require_once DIR_SYSTEM . 'startup.php';
/**
 * Контроллер импорта данных через фиды (каналы)
 *
 * Обеспечивает функционал для загрузки и обработки данных из внешних источников в формате CS.
 *
 * @author      Alexey Drozdov <lexa10091984@gmail.com>
 * @telegram    @lexa_drozdov
 * @phone       +3 (096) 971 44 44
 * @version     1.0
 * @copyright   2025
 */
class Import
{

    protected $db;
    protected $import_log;

    /**
     * Основной метод импорта товаров из CSV-файла
     *
     * Выполняет пакетный импорт товаров из CSV-файла с следующей логикой:
     * - Открывает CSV-файл и построчно обрабатывает данные
     * - Проверяет существование товара по артикулу (SKU)
     * - Обновляет существующие товары или создает новые
     * - Назначает категории, производителей и атрибуты
     * - Загружает изображения товаров
     * - Ведет детальный лог процесса импорта
     * - Обновляет статусы товаров после завершения импорта
     *
     * @return void
     * @throws Exception При ошибках чтения файла или обработки данных
     */
    public function index()
    {

        $registry = new Registry();
        $loader = new Loader($registry);
        $registry->set('load', $loader);
        $this->db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $registry->set('db', $this->db);

        // Инициализация логгера для отслеживания процесса импорта
        $this->import_log = new Log('import_products.log');
        // путь к файлу
        $csvFile = getenv('READY_PRODUCTS_CSV_PATH');
        $parent_id_boss = 85; // id главной категории Каталог

        $this->import_log->write("=== Начало импорта ===");
        $this->import_log->write("Время: " . date('Y-m-d H:i:s'));

        // Проверка существования файла
        if (!file_exists($csvFile)) {
            $this->import_log->write("Файл {$csvFile} не найден!");
            die;
        }

        // Открытие CSV-файла для чтения
        $handle = fopen($csvFile, "r");
        if (!$handle) {
            $this->import_log->write("Ошибка открытия файла!");
            die;
        }


        $line_number = 0;
        $result = [];
        //категории
        while (($datas_cat = fgetcsv($handle, 0, ";")) !== FALSE) {
            $line_number++;

            $sku_model = $this->str_trim($datas_cat[0]); // Артикул

            // Пропуск пустых строк и заголовков
            if (empty($sku_model) || $sku_model === 'Артикул') {
                continue;
            }

            // Проверка количества колонок
            if (count($datas_cat) < 23) {
                $this->import_log->write("Строка $line_number: недостаточно колонок (" . count($datas_cat) . " из 23)");
                continue;
            }

            $brand = $this->str_trim($datas_cat[3]);      // Марка (Mazda, Lexus, BMW)
            $model = $this->str_trim($datas_cat[4]);      // Модель (6, RX, 5-series)
            $modification = $this->str_trim($datas_cat[6]); // Модификация (GH, XU30, E39)
            $category = $this->str_trim($datas_cat[22]);   // Категория (Впускная система, и т.д.)

            if (empty($brand) || empty($model) || empty($modification) || empty($category)) {
                $this->import_log->write("Строка $line_number: есть пустые категории!!");
                continue;
            }

            if (!isset($result[$brand])) {
                $result[$brand] = [];
            }

            if (!isset($result[$brand][$model])) {
                $result[$brand][$model] = [];
            }

            if (!isset($result[$brand][$model][$modification])) {
                $result[$brand][$model][$modification] = [];
            }

            // Добавляем категорию (дубли внутри одной модификации исключаем)
            if (!in_array($category, $result[$brand][$model][$modification])) {
                $result[$brand][$model][$modification][] = $category;
            }
        }
        rewind($handle);

        if($result){
            foreach ($result as $brand => $models) {
                // Создаем категорию бренда (уровень 2)
                $brand_id = $this->addCategory($brand, $parent_id_boss, 0);
                $this->import_log->write("=== БРЕНД: {$brand} (ID: {$brand_id}) ===");

                foreach ($models as $model => $modifications) {
                    // Создаем категорию модели (уровень 3)
                    $model_id = $this->addCategory($model, $brand_id, 0);
                    $this->import_log->write("--- Модель: {$model} (ID: {$model_id}) ---");

                    foreach ($modifications as $modification => $categories) {
                        // Создаем категорию модификации (уровень 4)
                        $modification_id = $this->addCategory($modification, $model_id, 0);
                        $this->import_log->write(">>> Модификация: {$modification} (ID: {$modification_id}) <<");

                        $category_count = 0;
                        foreach ($categories as $category) {
                            // Создаем конечную категорию (уровень 5)
                            // Дублирование названий на этом уровне - это НОРМАЛЬНО
                            $final_category_id = $this->addCategory($category, $modification_id, $category_count);
                            $this->import_log->write("Категория: {$category} (ID: {$final_category_id})");
                        }
                        $this->import_log->write("Создано категорий для модификации: {$category_count}");
                    }
                }
            }
        }
        //категории

        // Инициализация счетчиков
        $line_number = 0;
        $add_product = 0;
        $update_product = 0;

        $arr_sku_file = array(); // Массив для хранения всех SKU из файла

        // Построчное чтение CSV-файла
        while (($datas = fgetcsv($handle, 0, ";")) !== FALSE) {
            $line_number++;

            $sku_model = $this->str_trim($datas[0]); // Артикул

            // Пропуск пустых строк и заголовков
            if (empty($sku_model) || $sku_model === 'Артикул') {
                continue;
            }


            // Проверка количества колонок
            if (count($datas) < 23) {
                $this->import_log->write("Строка $line_number: недостаточно колонок (" . count($datas) . " из 23)");
                continue;
            }

            $this->import_log->write("Товар {$sku_model}: начинаем обработку!");

            $arr_sku_file[] = $sku_model;

            // Парсинг данных из CSV-строки
            $name_product = $this->str_trim($datas[1]); // Наименование
            //$attribute_id_16 = $this->str_trim($datas[2]); // Донор
            $category_1 = $this->str_trim($datas[3]);  // Марка
            $category_2 = $this->str_trim($datas[4]); // Модель
            $attribute_id_17 = $this->str_trim($datas[5]); // Год
            $category_3_brend = $this->str_trim($datas[6]); // Кузов
            $attribute_id_18 = $this->str_trim($datas[7]); // Двигатель
            $attribute_id_27 = $this->str_trim($datas[8]); // Перед/Зад (F/B)
            $attribute_id_28 = $this->str_trim($datas[9]); // Лев/Прав (L/R)
            $attribute_id_29 = $this->str_trim($datas[10]); // Верх/Низ (U/D)
            $attribute_id_30 = $this->str_trim($datas[11]); // Цвет
            $attribute_id_31 = $this->str_trim($datas[12]); // Маркировка
            $attribute_id_22 = $this->str_trim($datas[13]); // Кросс-номера
            $attribute_id_20 = $this->str_trim($datas[14]); // Номер производителя
            $attribute_id_14 = $this->str_trim($datas[15]); // Производитель
            $product_description = $this->str_trim($datas[16]); // Комментарий
            $images = $this->str_trim($datas[17]); // Фото
            $attribute_id_15 = $this->str_trim($datas[18]); // Новый/БУ (new/used/contract)
            $price = $this->str_trim($datas[19]); // Цена
            $attribute_id_24 = $this->str_trim($datas[20]); // Склад
            $in_stock = $this->str_trim($datas[21]); // in_stock
            $category_4 = $this->str_trim($datas[22]); // last_category

            // Определение категории товара
            $category_id = $this->determineCategoryId(
                $category_1,
                $category_2,
                $category_3_brend,
                $category_4,
                $sku_model
            );

            // Поиск существующего товара по SKU
            $product = $this->getProductSearchSku($sku_model);

            if ($product) {
                // Обновление существующего товара
                $this->import_log->write("Товар {$sku_model}: найден обновляем");
                $this->updateProduct($product, $category_id, $price, $in_stock);
                $update_product++;
                continue;
            }

            $this->import_log->write("Товар {$sku_model}: не найден!");

            // Создание нового производителя при необходимости
            $manufacturer_id = !empty($category_3_brend)
                ? $this->addManufacturer($category_3_brend)
                : 0;

            // Создание нового товара
            $product_id = $this->addProduct(
                $sku_model,
                $name_product,
                $product_description,
                $price,
                $category_id,
                $manufacturer_id,
                $in_stock,
                0
            );

            // Добавление атрибутов товара
            if(!empty($attribute_id_14)) $this->addAtribute($product_id, 14, $attribute_id_14);
            if(!empty($attribute_id_15)) $this->addAtribute($product_id, 15, $attribute_id_15);
            if(!empty($attribute_id_17)) $this->addAtribute($product_id, 17, $attribute_id_17);
            if(!empty($attribute_id_18)) $this->addAtribute($product_id, 18, $attribute_id_18);
            if(!empty($attribute_id_20)) $this->addAtribute($product_id, 20, $attribute_id_20);
            if(!empty($attribute_id_22)) $this->addAtribute($product_id, 22, $attribute_id_22);
            if(!empty($attribute_id_24)) $this->addAtribute($product_id, 24, $attribute_id_24);
            if(!empty($category_1)) $this->addAtribute($product_id, 25, $category_1);
            if(!empty($category_2)) $this->addAtribute($product_id, 26, $category_2);
            if(!empty($category_3_brend)) $this->addAtribute($product_id, 23, $category_3_brend);
            if(!empty($attribute_id_27)) $this->addAtribute($product_id, 27, $attribute_id_27);
            if(!empty($attribute_id_28)) $this->addAtribute($product_id, 28, $attribute_id_28);
            if(!empty($attribute_id_29)) $this->addAtribute($product_id, 29, $attribute_id_29);
            if(!empty($attribute_id_30)) $this->addAtribute($product_id, 30, $attribute_id_30);
            if(!empty($attribute_id_31)) $this->addAtribute($product_id, 31, $attribute_id_31);

            // Добавление изображений товара
            if(!empty($images)){
                $this->addImages($product_id, $images);
            }

            $add_product++;
            $this->import_log->write("Товар {$sku_model}: создан!");
        }

        // Закрываем файл
        fclose($handle);

        // Обновление статусов товаров после импорта
        $this->setStatus($arr_sku_file);

        $this->add_cat_name();
        $this->seo_url_category();

        // Финализация процесса импорта
        $this->import_log->write("Cоздано товаров: {$add_product}");
        $this->import_log->write("Обнавлено товаров: {$update_product}");
        $this->import_log->write("Время: " . date('Y-m-d H:i:s'));
        $this->import_log->write("=== Импорт успешно завершен ===");
    }

    /**
     * Установка статусов товаров на основе сравнения с импортированным файлом
     *
     * Сравнивает артикулы товаров в базе данных с артикулами из импортированного файла.
     * Товары, которые отсутствуют в файле импорта, переводятся в статус "Неактивно" (0).
     * Это позволяет скрыть товары, которые больше не доступны в ассортименте.
     *
     * @param array $arr Массив артикулов (SKU) из импортированного CSV-файла
     * @return void
     */
    public function setStatus($arr)
    {
        // Получение всех артикулов товаров из базы данных
        $results_sku = $this->getProductsSku();

        // Проверка каждого товара из базы данных
        foreach ($results_sku as $product) {
            // Если артикул товара отсутствует в импортированном файле
            if (!in_array($product['sku'], $arr)) {
                // Установка статуса "Неактивно" (0) для товара
                $this->getProductsSkuStatus($product['product_id'], 0);
            }
        }
    }

    /**
     * функция для определенных категории по названию продукта
     * @return void
     */
    public function add_cat_name() {
        $name_category = [
            ['name' => 'Шины летние', 'id' => 8576],
            ['name' => 'Шины зимние', 'id' => 8575],
            ['name' => 'Шина зимняя', 'id' => 8575],
            ['name' => 'Шины всесезонные', 'id' => 8574],
            ['name' => 'Шина летняя', 'id' => 8576],
            ['name' => 'Шина всесезонная', 'id' => 8574],
            ['name' => 'Комплект дисков', 'id' => 8769],
            ['name' => 'Комплект разношироких дисков', 'id' => 8769],
            ['name' => 'Диск колёсный', 'id' => 8769],
        ];

        foreach ($name_category as $cat) {
            $search = $this->db->escape($cat['name']);

            $query = $this->db->query("
            SELECT name, product_id 
            FROM " . DB_PREFIX . "product_description 
            WHERE language_id = 1 
              AND name LIKE '" . $search . "%'
        ");

            foreach ($query->rows as $product) {
                // удаляем старые категории
                $this->db->query("
                DELETE FROM " . DB_PREFIX . "product_to_category 
                WHERE product_id = '" . (int)$product['product_id'] . "'
            ");

                // добавляем в новую категорию
                $this->db->query("
                INSERT INTO " . DB_PREFIX . "product_to_category 
                SET product_id = '" . (int)$product['product_id'] . "', 
                    category_id = '" . (int)$cat['id'] . "'
            ");
            }
        }
    }

    /**
     * Определение ID категории для товара на основе иерархии категорий
     *
     * Анализирует переданные категории товара и определяет наиболее подходящую категорию в системе.
     * Использует многоуровневый подход для поиска категории. Если точное совпадение не найдено,
     * назначает категорию по умолчанию. Весь процесс логируется для отслеживания решений.
     *
     * @param string $category_1 Категория уровня 1 (Марка автомобиля)
     * @param string $category_2 Категория уровня 2 (Модель автомобиля)
     * @param string $category_3_brend Категория уровня 3 (Кузов/Бренд)
     * @param string $category_4 Категория уровня 4 (Дополнительная категория)
     * @param string $sku_model Артикул товара для логирования
     * @return int ID найденной категории или категории по умолчанию
     */
    public function determineCategoryId($category_1, $category_2, $category_3_brend, $category_4, $sku_model)
    {
        $default_category_id = 8577; // категория по умолчанию

        // Проверка на полностью пустые категории
        if (empty($category_1) && empty($category_2) && empty($category_3_brend) && empty($category_4)) {
            $this->import_log->write("Товар {$sku_model}: все категории пустые, назначена категория по умолчанию {$default_category_id}");
            return $default_category_id;
        }

        // Поиск наиболее подходящей категории в системе
        $category_id = $this->findBestCategory($category_1, $category_2, $category_3_brend, $category_4);

        if ($category_id) {
            $this->import_log->write("Товар {$sku_model}: найдена категория {$category_id} для цепочки {$category_1} > {$category_2} > {$category_3_brend} > {$category_4}");
            return $category_id;
        }

        // Категория не найдена - использование резервного варианта
        $this->import_log->write("Товар {$sku_model}: категория не найдена для цепочки {$category_1} > {$category_2} > {$category_3_brend} > {$category_4}, назначена категория по умолчанию {$default_category_id}");
        return $default_category_id;
    }

    /**
     * Обрезка пробельных символов в начале и конце строки
     *
     * Вспомогательная функция для очистки строковых данных от пробелов,
     * табуляций и других пробельных символов. Используется для предварительной
     * обработки данных из CSV-файла перед сохранением в базу данных.
     *
     * @param string $str Исходная строка для обработки
     * @return string Очищенная строка без пробельных символов по краям
     */
    public function str_trim($str)
    {
        return trim($str);
    }

    /**
     * Поиск товара по артикулу (SKU)
     *
     * Выполняет поиск существующего товара в базе данных по артикулу.
     * Сравнение происходит без учета регистра символов.
     *
     * @param string $sku_model Артикул товара для поиска
     * @return int|bool ID товара если найден, false если не найден
     */
    public function getProductSearchSku($sku_model) {
        $query = $this->db->query("SELECT product_id FROM " . DB_PREFIX . "product WHERE LOWER(sku) = LOWER('" . $this->db->escape($sku_model) . "')");
        if ($query->num_rows) {
            return $query->row['product_id'];
        } else {
            return false;
        }
    }

    /**
     * Получение всех артикулов товаров из базы данных
     *
     * Возвращает массив всех товаров системы с их артикулами и ID.
     * Используется для сравнения с импортируемыми данными.
     *
     * @return array Массив товаров вида [['sku' => 'артикул', 'product_id' => ID], ...]
     */
    public function getProductsSku() {
        $query = $this->db->query("SELECT sku, product_id FROM " . DB_PREFIX . "product WHERE 1");
        return $query->rows;
    }

    /**
     * Обновление статуса товара
     *
     * Изменяет статус товара (активен/неактивен) по его ID.
     * Используется для деактивации товаров, отсутствующих в импорте.
     *
     * @param int $product_id ID товара
     * @param int $status Новый статус (1 - активен, 0 - неактивен)
     * @return void
     */
    public function getProductsSkuStatus($product_id,$status)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "product SET 
                          status          = '" . (int)$status . "'   
                          WHERE product_id = '" . (int)$product_id . "'");
    }

    /**
     * Поиск наилучшей категории по иерархии
     *
     * Выполняет поиск категории по многоуровневой структуре:
     * Категория 1 → Категория 2 → Категория 3 → Категория 4
     * Поиск начинается с родительской категории ID 85.
     *
     * @param string $category_1 Категория уровня 1 (Марка)
     * @param string $category_2 Категория уровня 2 (Модель)
     * @param string $category_3_brend Категория уровня 3 (Кузов/Бренд)
     * @param string $category_4 Категория уровня 4 (Доп. категория)
     * @return int|bool ID найденной категории или false если не найдена
     */
    public function findBestCategory($category_1, $category_2, $category_3_brend, $category_4)
    {
        // Поиск категории 1
        $query_1 = $this->db->query("SELECT c.category_id FROM " . DB_PREFIX . "category c 
                           LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) 
                           WHERE LOWER(cd.name) = LOWER('" . $this->db->escape($category_1) . "') 
                           AND c.parent_id = 85 
                           AND cd.language_id = 1 
                           LIMIT 1");

        if (!$query_1->num_rows) {
            return false;
        }
        $parent_id = (int)$query_1->row['category_id'];

        // Поиск категории 2
        $query_2 = $this->db->query("SELECT c.category_id FROM " . DB_PREFIX . "category c 
                           LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) 
                           WHERE LOWER(cd.name) = LOWER('" . $this->db->escape($category_2) . "') 
                           AND c.parent_id = " . $parent_id . " 
                           AND cd.language_id = 1 
                           LIMIT 1");

        if (!$query_2->num_rows) {
            return false;
        }
        $parent_id = (int)$query_2->row['category_id'];

        // Поиск категории 3
        $query_3 = $this->db->query("SELECT c.category_id FROM " . DB_PREFIX . "category c 
                           LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) 
                           WHERE LOWER(cd.name) = LOWER('" . $this->db->escape($category_3_brend) . "') 
                           AND c.parent_id = " . $parent_id . " 
                           AND cd.language_id = 1 
                           LIMIT 1");

        if (!$query_3->num_rows) {
            return false;
        }
        $parent_id = (int)$query_3->row['category_id'];

        // Поиск категории 4
        $query_4 = $this->db->query("SELECT c.category_id FROM " . DB_PREFIX . "category c 
                           LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) 
                           WHERE LOWER(cd.name) = LOWER('" . $this->db->escape($category_4) . "') 
                           AND c.parent_id = " . $parent_id . " 
                           AND cd.language_id = 1 
                           LIMIT 1");

        if ($query_4->num_rows) {
            return $query_4->row['category_id'];
        }

        return false;
    }

    /**
     * Создание новой категории в каталоге OpenCart с полной инициализацией
     *
     * Функция реализует интеллектуальное добавление категорий с проверкой на дубликаты
     * и полным созданием всех связанных записей в системе. Использует паттерн Closure Table
     * для эффективного управления иерархическими данными категорий.
     *
     * @param string $name Название категории (обязательно)
     * @param int $parent_id ID родительской категории (0 для корневой)
     * @param int $sort_order Порядок сортировки в списке категорий (по умолчанию 0)
     * @return int ID созданной или существующей категории
     *
     * @algorithm
     * 1. Проверка существования - избегание дубликатов
     * 2. Создание основной записи категории
     * 3. Добавление мультиязычных описаний
     * 4. Построение иерархии через Closure Table
     * 5. Привязка к магазину и макету
     *
     * @uses category_path - таблица для хранения путей категорий (Closure Table pattern)
     * @uses category_to_store - привязка категории к магазину
     * @uses category_to_layout - привязка макета отображения
     *
     * @example
     * // Создание подкатегории "Зимние шины" в категории "Шины" (ID: 100)
     * $categoryId = $this->addCategory("Зимние шины", 100, 1);
     *
     * @note Функция обеспечивает целостность данных - при существовании категории
     *       возвращает ID без создания дубликата
     * @warning Все создаваемые категории получают статус "Активна" (status = 1)
     */
    public function addCategory($name, $parent_id, $sort_order = 0) {
        // Проверяем существование категории с таким же именем и родителем
        // Это предотвращает создание дубликатов в одной ветке иерархии
        $query = $this->db->query("SELECT c.category_id FROM " . DB_PREFIX . "category c 
                           LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) 
                           WHERE cd.name = '" . $this->db->escape($name) . "' 
                           AND c.parent_id = '" . (int)$parent_id . "' 
                           AND cd.language_id = 1 
                           LIMIT 1");

        // Если категория уже существует - возвращаем её ID
        if ($query->num_rows) {
            return $query->row['category_id'];
        }

        // Поддерживаемые языки (1 - русский, 2 - украинский)
        $langs = array(1,2);

        // Создание основной записи категории в таблице category
        $this->db->query("INSERT INTO " . DB_PREFIX . "category SET 
                  parent_id = '" . (int)$parent_id . "', 
                  `top` = '0',              -- Не является главной категорией
                  `column` = '1',           -- Количество колонок в меню
                  sort_order = '" . (int)$sort_order . "', 
                  status = '1',             -- Категория активна
                  date_modified = NOW(), 
                  date_added = NOW()");

        // Получаем ID созданной категории
        $category_id = $this->db->getLastId();

        // Создание мультиязычных описаний категории
        foreach ($langs as $language_id) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "category_description SET 
                  category_id = '" . (int)$category_id . "', 
                  language_id = '" . (int)$language_id . "', 
                  name = '" . $this->db->escape($name) . "', 
                  description = '', 
                  meta_title = '" . $this->db->escape($name) . "', 
                  meta_description = '', 
                  meta_keyword = ''");
        }

        // Реализация паттерна Closure Table для иерархических данных
        // Этот подход обеспечивает эффективные запросы для деревьев категорий
        $level = 0;

        // Получаем все пути родительской категории для построения иерархии
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "category_path` WHERE category_id = '" . (int)$parent_id . "' ORDER BY `level` ASC");

        // Добавляем пути от всех родительских категорий
        foreach ($query->rows as $result) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "category_path` SET 
                      `category_id` = '" . (int)$category_id . "', 
                      `path_id` = '" . (int)$result['path_id'] . "', 
                      `level` = '" . (int)$level . "'");
            $level++;
        }

        // Добавляем путь для самой категории (сама на себя)
        $this->db->query("INSERT INTO `" . DB_PREFIX . "category_path` SET 
                  `category_id` = '" . (int)$category_id . "', 
                  `path_id` = '" . (int)$category_id . "', 
                  `level` = '" . (int)$level . "'");

        // Привязка категории к магазину (store_id = 0 - основной магазин)
        $this->db->query("INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '" . (int)$category_id . "', store_id = '0'");

        // Проверяем и добавляем привязку к макету по умолчанию
        $layout_check = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_to_layout 
                               WHERE category_id = '" . (int)$category_id . "' 
                               AND store_id = '0'");
        if (!$layout_check->num_rows) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "category_to_layout SET category_id = '" . (int)$category_id . "', store_id = '0', layout_id = '0'");
        }

        return $category_id;
    }

    /**
     * Добавление производителя
     *
     * Создает нового производителя или возвращает ID существующего.
     * Автоматически генерирует SEO URL и привязывает к магазину.
     * Поддерживает мультиязычные SEO URL.
     *
     * @param string $name Название производителя
     * @return int ID производителя
     */
    public function addManufacturer($name)
    {

        $query = $this->db->query("SELECT manufacturer_id FROM " . DB_PREFIX . "manufacturer 
                              WHERE LOWER(name) = LOWER('" . $this->db->escape($name) . "')");

        if ($query->num_rows) {
            return $query->row['manufacturer_id'];
        }

        $this->db->query("INSERT INTO " . DB_PREFIX . "manufacturer SET 
                          name = '" . $this->db->escape($name) . "', 
                          sort_order = '0'");

        $manufacturer_id = $this->db->getLastId();

        $this->db->query("INSERT INTO " . DB_PREFIX . "manufacturer_to_store SET manufacturer_id = '" . (int)$manufacturer_id . "', store_id = '0'");

        $name = $this->TransLit($name);
        $seo_url = $this->MetaURL($name);
        $base_keyword = strtolower($seo_url);
        $keyword = $base_keyword;

        $langs = array(1,2);

        $counter = 1;
        while ($this->isKeywordExists($keyword)) {
            $keyword = $base_keyword . '-' . $counter;
            $counter++;
        }

        foreach ($langs as $language_id) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET 
                              store_id      = '0', 
                              language_id   = '" . (int)$language_id . "', 
                              query         = 'manufacturer_id=" . (int)$manufacturer_id . "', 
                              keyword       = '" . $this->db->escape($keyword) . "'");

        }
        return $manufacturer_id;
    }

    /**
     * Добавление нового товара
     *
     * Создает полную запись товара в системе OpenCart включая:
     * - Основные данные товара
     * - Мультиязычные описания
     * - Привязку к категории и магазину
     * - SEO URL
     *
     * @param string $sku_model Артикул товара
     * @param string $name_product Название товара
     * @param string $product_description Описание товара
     * @param float $price Цена товара
     * @param int $category_id ID категории
     * @param int $manufacturer_id ID производителя
     * @param int $in_stock Количество на складе
     * @param int $sort_order Порядок сортировки
     * @return int ID созданного товара
     */
    public function addProduct($sku_model, $name_product, $product_description, $price, $category_id, $manufacturer_id, $in_stock, $sort_order)
    {
        $langs = array(1,2);

        $this->db->query("INSERT INTO " . DB_PREFIX . "product SET 
                          model           = '" . $this->db->escape($sku_model) . "', 
                          sku             = '" . $this->db->escape($sku_model) . "', 
                          upc             = '', 
                          ean             = '', 
                          jan             = '', 
                          isbn            = '', 
                          mpn             = '', 
                          location        = '', 
                          quantity        = '" . (int)$in_stock  . "', 
                          minimum         = '1', 
                          subtract        = '0', 
                          stock_status_id = '7', 
                          date_available = '" . $this->db->escape(date('Y-m-d', strtotime('-1 day'))) . "',
                          manufacturer_id = '" . (int)$manufacturer_id . "', 
                          shipping        = '1', 
                          price           = '" . (float)$price . "', 
                          points          = '0', 
                          weight          = '0.00000000', 
                          weight_class_id = '1', 
                          length          = '0.00000000', 
                          width           = '0.00000000', 
                          height          = '0.00000000', 
                          length_class_id = '1', 
                          status          = '1', 
                          tax_class_id    = '0', 
                          sort_order      = '" . (int)$sort_order . "', 
                          date_added      = NOW(), 
                          date_modified   = NOW()");

        $product_id = $this->db->getLastId();

        foreach ($langs as $language_id) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "product_description SET 
                              product_id       = '" . (int)$product_id . "', 
                              language_id      = '" . (int)$language_id . "', 
                              name             = '" . $this->db->escape($name_product) . "', 
                              description      = '" . $this->db->escape($product_description) . "', 
                              tag              = '', 
                              meta_title       = '" . $this->db->escape($name_product) . "', 
                              meta_description = '', 
                              meta_keyword     = ''");
        }

        $this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int)$product_id . "', category_id = '" . (int)$category_id . "'");
        $this->db->query("INSERT INTO " . DB_PREFIX . "product_to_store SET product_id = '" . (int)$product_id . "', store_id = '0'");
        $this->db->query("INSERT INTO " . DB_PREFIX . "product_to_layout SET product_id = '" . (int)$product_id . "', store_id = '0', layout_id = '0'");


        $name = $this->TransLit($name_product);
        $seo_url = $this->MetaURL($name);
        $base_keyword = strtolower($seo_url);
        $keyword = $base_keyword;

        $counter = 1;
        while ($this->isKeywordExists($keyword)) {
            $keyword = $base_keyword . '-' . $counter;
            $counter++;
        }
        
        foreach ($langs as $language_id) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET 
                              store_id      = '0', 
                              language_id   = '" . (int)$language_id ."', 
                              query         = 'product_id=" . (int)$product_id . "', 
                              keyword       = '" . $this->db->escape($keyword) . "'");

        }

        return $product_id;
    }

    /**
     * Добавление атрибута к товару
     *
     * Привязывает атрибут к товару с поддержкой мультиязычности.
     * Перед добавлением удаляет существующее значение атрибута.
     *
     * @param int $product_id ID товара
     * @param int $attribute_id ID атрибута
     * @param string $text Значение атрибута
     * @return void
     */
    public function addAtribute($product_id, $attribute_id, $text)
    {
        $langs = array(1,2);

        $this->db->query("DELETE FROM " . DB_PREFIX . "product_attribute WHERE product_id = '" . (int)$product_id . "' AND attribute_id = '" . (int)$attribute_id . "'");

        foreach ($langs as $language_id) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "product_attribute SET 
                                 product_id = '" . (int)$product_id . "', 
                                 attribute_id = '" . (int)$attribute_id . "', 
                                 language_id = '" . (int)$language_id . "', 
                                 text = '" .  $this->db->escape($text) . "'");
        }
    }

    /**
     * Добавление изображений товара
     *
     * Обрабатывает и добавляет изображения товара из URL.
     * Первое изображение становится главным, остальные - дополнительными.
     * Выполняет преобразование URL в локальные пути.
     *
     * @param int $product_id ID товара
     * @param string $images Строка с URL изображений через запятую
     * @return bool true при успешном добавлении, false при ошибке
     */
    public function addImages($product_id, $images)
    {
        if (empty($images)) {
            return false;
        }

        $array_images = explode(',', $images);

        if (empty($array_images)) {
            return false;
        }

        $main_image = array_shift($array_images);
        $processed_main_image = str_replace(
            'https://3fb394a7-cdc0-4e09-a75f-727196cc50fd.selcdn.net/pub/c758/productphoto/',
            'catalog/',
            $main_image
        );

        $this->db->query("UPDATE " . DB_PREFIX . "product 
                     SET image = '" . $this->db->escape(trim($processed_main_image)) . "' 
                     WHERE product_id = '" . (int)$product_id . "'");

        if (!empty($array_images)) {
            $sort_order = 1;
            foreach ($array_images as $image_url) {
                $processed_image = str_replace(
                    'https://3fb394a7-cdc0-4e09-a75f-727196cc50fd.selcdn.net/pub/c758/productphoto/',
                    'catalog/',
                    $image_url
                );

                $this->db->query("INSERT INTO " . DB_PREFIX . "product_image 
                             SET product_id = '" . (int)$product_id . "', 
                                 image = '" . $this->db->escape(trim($processed_image)) . "', 
                                 sort_order = '" . (int)$sort_order . "'");
                $sort_order++;
            }
        }
        return true;
    }

    /**
     * Обновление данных товара
     *
     * Обновляет основные параметры существующего товара:
     * - Количество на складе
     * - Цену
     * - Статус активности
     * - Привязку к категории
     *
     * Автоматически определяет статус товара на основе наличия и цены.
     *
     * @param int $product_id ID товара
     * @param int $category_id ID категории
     * @param float $price Цена товара
     * @param int $in_stock Количество на складе
     * @return void
     */
    public function UpdateProduct($product_id, $category_id, $price, $in_stock)
    {

        $status = 1;

        if($in_stock == 0 || empty($in_stock)){
            $status = 0;
        }

        if(empty($price) || $price == 0){
            $status = 0;
        }

        $this->db->query("UPDATE " . DB_PREFIX . "product SET 
                          quantity        = '" . (int)$in_stock  . "',
                          price           = '" . (float)$price . "',
                          status          = '" . (int)$status . "'   
                          WHERE product_id = '" . (int)$product_id . "'");

        $this->db->query("DELETE FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");

        $this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int)$product_id . "', category_id = '" . (int)$category_id . "'");

    }

    /**
     * Генерация SEO URL для всех категорий каталога
     *
     * Функция выполняет пакетное обновление SEO-ссылок для всех категорий магазина:
     * - Удаляет существующие SEO URL для категорий чтобы избежать дублирования
     * - Для каждой категории генерирует транслитерированное название на латинице
     * - Создает SEO-дружественный URL используя правила транслитерации и очистки
     * - Обеспечивает уникальность ключевых слов добавляя суффиксы при коллизиях
     * - Создает мультиязычные SEO URL для всех поддерживаемых языков (русский/украинский)
     *
     * @return void
     *
     * @uses TransLit() Для транслитерации кириллических названий
     * @uses MetaURL() Для форматирования текста в SEO-формат
     * @uses isKeywordExists() Для проверки уникальности ключевых слов
     *
     * @example
     * Исходное название: "Впускная система"
     * Транслитерация: "vpusknaya-sistema"
     * SEO URL: "vpusknaya-sistema"
     * При дублировании: "vpusknaya-sistema-1", "vpusknaya-sistema-2"
     *
     * @note Важно: функция удаляет ВСЕ существующие SEO URL категорий перед генерацией новых
     * @warning Не использовать во время активной работы магазина - может вызвать временные 404 ошибки
     */
    public function seo_url_category() {
        // Коды поддерживаемых языков (1 - русский, 2 - украинский)
        $langs = array(1,2);

        // Очистка старых SEO URL для категорий чтобы избежать дублирования
        $this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query LIKE 'category_id=%' AND language_id = 1 AND store_id = 0");

        // Получение всех категорий с их названиями
        $query = $this->db->query("SELECT cd.category_id, cd.name FROM " . DB_PREFIX . "category_description cd WHERE cd.language_id = 1");

        // Обработка каждой категории
        foreach ($query->rows as $category) {
            $category_id = $category['category_id'];
            $russian_name = trim($category['name']);

            // Транслитерация названия категории
            $name = $this->TransLit($russian_name);

            // Форматирование в SEO-дружественный URL
            $seo_url = $this->MetaURL($name);
            $base_keyword = strtolower($seo_url);

            $keyword = $base_keyword;
            $counter = 1;

            // Проверка и обеспечение уникальности ключевого слова
            while ($this->isKeywordExists($keyword)) {
                $keyword = $base_keyword . '-' . $counter;
                $counter++;
            }

            // Создание SEO URL для всех языков
            foreach ($langs as $language_id) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET 
                      store_id = '0', 
                      language_id = '". (int)$language_id  ."', 
                      query = 'category_id=" . (int)$category_id . "', 
                      keyword = '" . $this->db->escape($keyword) . "'");
            }
        }
    }

    /**
     * Проверка существования SEO ключевого слова
     *
     * Проверяет, используется ли уже указанное ключевое слово в SEO URL.
     *
     * @param string $keyword Ключевое слово для проверки
     * @return bool true если ключевое слово существует, false если свободно
     */
    public function isKeywordExists($keyword)
    {
        $query = $this->db->query("SELECT COUNT(*) as total FROM " . DB_PREFIX . "seo_url 
                              WHERE keyword = '" . $this->db->escape($keyword) . "' 
                              AND store_id = 0 
                             ");
        return $query->row['total'] > 0;
    }

    /**
     * Транслитерация текста
     *
     * Преобразует кириллические и специальные символы в латинские аналоги.
     * Поддерживает украинские, русские и латышские символы.
     *
     * @param string $text Исходный текст для транслитерации
     * @return string Транслитерированный текст
     */
    public function TransLit($text)
    {
        $tr = array(
            "А" => "a", "Б" => "b", "В" => "v", "Г" => "g",
            "Д" => "d", "Е" => "e", "Ё" => "e", "Ж" => "g", "З" => "z", "И" => "i",
            "Й" => "J", "К" => "k", "Л" => "l", "М" => "m", "Н" => "n",
            "О" => "o", "П" => "p", "Р" => "r", "С" => "s", "Т" => "t",
            "У" => "u", "Ф" => "f", "Х" => "h", "Ц" => "ts", "Ч" => "ch",
            "Ш" => "sh", "Щ" => "sch", "Ъ" => "a", "Ы" => "y", "Ь" => "",
            "Э" => "e", "Ю" => "yu", "Я" => "ya", "Ї" => "ji", "Ґ" => "g", "І" => "I", "а" => "a", "б" => "b",
            "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "e", "ж" => "g",
            "з" => "z", "и" => "i", "й" => "j", "к" => "k", "л" => "l",
            "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
            "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h",
            "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "a",
            "ы" => "y", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya",
            "ї" => "ji", "і" => "i", "ґ" => "g", "Є" => "e", "є" => "e", "ў" => "u", "Ў" => "u", "і" => "i", "І" => "i",
            "Ā" => "a", "Č" => "c", "Ē" => "e", "Ģ" => "g", "Ī" => "i", "Ķ" => "k", "Ļ" => "l", "Ņ" => "n", "Š" => "s", "Ū" => "u", "Ž" => "z",
            "ā" => "a", "č" => "c", "ē" => "e", "ģ" => "g", "ī" => "i", "ķ" => "k", "ļ" => "l", "ņ" => "n", "š" => "s", "ū" => "u", "ž" => "z");

        $text = strtr($text, $tr);
        unset ($tr);
        return $text;
    }

    /**
     * Форматирование текста для SEO URL
     *
     * Преобразует текст в SEO-дружественный URL:
     * - Удаляет HTML теги и специальные символы
     * - Заменяет пробелы и специальные символы на дефисы
     * - Удаляет лишние дефисы
     * - Обрезает дефисы в начале и конце
     *
     * @param string $text Исходный текст для форматирования
     * @return string Отформатированный SEO URL
     */
    public function MetaURL($text)
    {
        $text = strip_tags($text);
        $text = str_replace('&laquo;', '', $text);
        $text = str_replace('&raquo;', '', $text);
        $text = str_replace('~', '-', $text);
        $text = str_replace(' ', '-', $text);
        $text = str_replace('&nbsp;', '-', $text);
        $text = str_replace('&#034;', '', $text);
        $text = str_replace('&#039;', '', $text);
        $text = str_replace('&quot;', '', $text);
        $text = str_replace('&amp;quot;', '', $text);
        $text = str_replace('&amp;laquo;', '', $text);
        $text = str_replace('&amp;raquo;', '', $text);
        $text = str_replace('&amp;nbsp;', '', $text);
        $text = str_replace('&amp;', '', $text);
        $text = str_replace("“", '-', $text);
        $text = str_replace("”", '-', $text);
        $text = str_replace("'", '-', $text);
        $text = str_replace('"', '-', $text);
        $text = str_replace('«', '-', $text);
        $text = str_replace('»', '-', $text);
        $text = str_replace('°', '', $text);
        $text = str_replace('.', '-', $text);
        $text = str_replace(':', '-', $text);
        $text = str_replace('|', '-', $text);
        $text = str_replace('*', '-', $text);
        $text = str_replace('=', '-', $text);
        $text = str_replace('^', '-', $text);
        $text = str_replace('%', '-', $text);
        $text = str_replace('$', '-', $text);
        $text = str_replace('?', '-', $text);
        $text = str_replace('@', '-', $text);
        $text = str_replace('+', '-', $text);
        $text = str_replace('!', '-', $text);
        $text = str_replace('<', '', $text);
        $text = str_replace('>', '', $text);
        $text = str_replace('#', '', $text);
        $text = str_replace(',', '-', $text);
        $text = str_replace('\\', '-', $text);
        $text = str_replace('\/', '-', $text);
        $text = str_replace("/", '-', $text);
        $text = str_replace("(", '', $text);
        $text = str_replace(")", '', $text);
        $text = str_replace("[", '', $text);
        $text = str_replace("]", '', $text);
        $text = str_replace('&', '-', $text);
        $text = str_replace(" ", '-', $text);
        $text = str_replace("№", '', $text);
        $text = str_replace("`", '-', $text);
        $text = str_replace("{", '-', $text);
        $text = str_replace("}", '-', $text);
        $text = str_replace("—", '-', $text);
        $text = str_replace("–", '-', $text);
        $text = str_replace("’", '', $text);
        $text = str_replace(";", '-', $text);
        $text = str_replace("±", '-', $text);
        $text = preg_replace('|-+|', '-', $text);
        $l = strlen($text);
        if (substr($text, 0, 1) == "-") $text = substr($text, 1, $l - 1);
        if (substr($text, $l - 1, 1) == "-") $text = substr($text, 0, $l - 1);
        $text = trim($text);

        return $text;
    }
}

if (php_sapi_name() === 'cli') {
    $import = new Import();
    $import->index();
}
