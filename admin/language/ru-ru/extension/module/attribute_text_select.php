<?php
// Heading
$_['v_mod'] = '8';
$_['vers_mod'] = '3.0.'.$_['v_mod'];
$_['p_mod'] = 'Attribute Text Select';
$_['heading_title'] = '<b style="color:darkblue"><i class="fa fa-tasks fa-lg"></i> '.$_['p_mod'].'_v.'.$_['vers_mod'].'.1</b>';
$_['title'] = $_['p_mod'].'_v.'.$_['vers_mod'].'.1';
if(defined('PHP_MAJOR_VERSION') && defined('PHP_MINOR_VERSION')) {$versi_php = PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;}else{$versi_php = '?';}
$_['heading_title'] .= ' <span data-toggle="tooltip" title="site PHP '.$versi_php.'"><img src="view/stylesheet/attribute_text_select/helpis.png" style="border:0;"></span>';

//tab_nav
$_['tab_base'] = 'Основные';
$_['tab_lic'] = 'Лицензия';
$_['tab_edit_values'] = 'Изменения в Значениях';
$_['tab_gather'] = 'Наборы Атрибутов';
$_['tab_add_gather'] = 'Создать Набор';
$_['tab_edit_gather'] = 'Редактировать Набор';
$_['tab_edit_products'] = 'Редактирование в товарах';
$_['tab_merging_attribute'] = 'Объединение в атрибутах';
$_['tab_create_values'] = 'Назначить Значения';

//base
$_['legend_clear_tables'] = 'Очистить таблицы';
$_['help_clear_tables'] = 'Очистит таблицы модуля';
$_['text_succ_clear_tables'] = 'Очищено';
$_['legend_gen_text_id'] = 'Сканировать';
$_['help_gen_text_id'] = 'Сканирует Значения у Атрибутов, которые отмечены ниже. Существующие будут обновлены, а Новые будут созданы. Если у Значения на другом Языке нет названия, то копирует название из установленного (Первого) языка. Если нужно заново '.$_['legend_gen_text_id'].' Значения атрибутов, то сначала нажмите `'.$_['legend_clear_tables'].'`';
$_['legend_separ'] = 'Символ';
$_['help_separ'] = 'Один или несколько символов подряд, которые разделят Текстовые значения Атрибутов. Используется для мульти-атрибутов. У новых Значений пробелы по краям удаляются';
$_['legend_chunk'] = 'По одному:';
$_['help_chunk'] = 'Обрабатывать последовательно по одному Атрибуту.(Используется для обработки большого количества Атрибутов)';
$_['legend_del_html_tag'] = 'del htmlTags:';
$_['help_del_html_tag'] = 'Попытается удалить HTML-теги из Значений атрибутов';
$_['legend_lock_tabl'] = 'Lock tables:';
$_['help_lock_tabl'] = '!!! Экспериментальный функционал. Во время обработки данных - блокировать таблицы  Базы Данных. Это помогает ускорить обработку, но возможен конфликт между другими таблицами БД. При появлении ошибки - отключить. После выбора - нажмите `Сохранить` настройки модуля';
$_['legend_block_operac'] = 'Открыть/закрыть блок операций';
$_['help_block_operac'] = 'Операции по формированию Значений атрибутов и принадлежащим к им Таблицам';
$_['legend_copy_tables'] = 'Перезаписать данные';
$_['help_copy_tables'] = 'Перезаписать данные из таблиц модуля `'.$_['p_mod'].'` в таблицу `product_attribute`';
$_['text_succ_copy_tables'] = 'Перезаписаны';
$_['legend_symbol_copy_tables'] = 'Знак:';
$_['help_symbol_copy_tables'] = 'Знак между Значениями атрибутов, если Атрибут будет иметь более одного Значения';
$_['error_symbol_copy_tables'] = 'Не указан Знак!';
$_['legend_lang_id_default'] = 'Язык старта:';
$_['help_lang_id_default'] = 'Язык, который будет использоваться в Первую очередь для обработки Значений атрибутов. Рекомендация для `мульти-значений` – Выбирайте тот язык, на котором гарантировано будут значения Атрибутов';
$_['legend_del_empty_text'] = 'Игнор Пустые:';
$_['help_del_empty_text'] = 'Игнорировать (пропускать) Атрибуты без Значений';
//dump
$_['legend_dump_tabl'] = 'Операции с таблицами';
$_['legend_dump_tabl_ats'] = 'Таблицы модуля `Attribute Text Select`';
$_['legend_dump_tabl_pa'] = 'Таблица Opencart `product_attribute`';
$_['help_update'] = '(Дата актуальна на момент обновления страницы)';
$_['legend_re_end_dump'] = 'Откатить';
$_['help_re_end_dump'] = 'Откатить последнюю операцию в таблице `product_attribute` к дате: %s '.$_['help_update'];
$_['legend_dump_create'] = 'Создать дамп';
$_['legend_dump_re'] = 'Вернуть дамп';
$_['help_dump_ats_create'] = 'Резервное копирование таблиц модуля';
$_['help_dump_pa_create'] = 'Резервное копирование таблицы `product_attribute`';
$_['help_dump_ats_re'] = 'Вернуть дамп в таблицы модуля на дату: %s '.$_['help_update'];
$_['help_dump_pa_re'] = 'Вернуть дамп в таблицу `product_attribute` на дату: %s '.$_['help_update'];
$_['popup_dump_operac'] = 'Потвердить операцию/действие';
$_['succ_dump_operac'] = 'Операция прошла успешно';

$_['legend_attribute_group'] = 'Группа атрибутов:';
$_['legend_attribute'] = 'Атрибут:';
$_['legend_text'] = 'Значение атрибута:';
//. Если ввести символ <b>%</b> - покажет список
$_['help_autocomplete'] = '(Автодополнение)';

//settings Product Site
$_['legend_setting_site'] = 'Настройки для Карточки товара на сайте';
$_['legend_delit'] = 'Новый делитель:';
$_['help_delit'] = 'В поле указать - через какой `Новый делитель`, разделять Значения атрибутов. Так же можно использовать HTML-теги, в том числе и перенос строки. Если не указывать, то применяется `'.$_['legend_separ'].'`';
$_['legend_delit_attribs'] = 'для Атрибутов:';
$_['help_delit_attribs'] = 'В поле указать ID-атрибутов через запятую, или точку с запятой (например: 5;18;25), для которых будет применяться `Новый делитель` в Значениях атрибутов. Если оставить поле пустым, то Новый делитель будет применен ко всем Значениям атрибута, где они есть';
$_['legend_ignor_attrib'] = 'Игнор. Атрибуты:';
$_['help_ignor_attrib'] = 'Не показывать перечисленные Атрибуты в блоке `Характеристики`. В поле указать ID-атрибутов через запятую, или точку с запятой (например: 5;18;25)';
$_['legend_incl_img'] = 'Image:';
$_['help_incl_img'] = 'Прикреплять изображение (если оно есть) для Значения атрибута.';
$_['legend_img_wh'] = 'Размер image в px -';
$_['help_img_wh'] = 'Указать число, каким размером будет изображение (если оно есть) для Значения атрибута.';
$_['legend_cls_img'] = 'class image:';
$_['help_cls_img'] = 'Указать имя класса для стиля изображение Значения атрибута.';

//settings Product Admin
$_['legend_setting_admin_prod'] = 'Настройки для Карточки товара Админки';
$_['legend_tab_attrib_action'] = 'tab.attrib.action:';
$_['help_tab_attrib_action'] = 'При открытии Карточки товара Админки, первым показывать вкладку Атрибуты (Характеристики)';

//settings admin
$_['legend_setting_admin'] = 'Настройки для админки модуля';
$_['legend_click_select'] = 'Click select:';
$_['help_click_select'] = 'По клику открывать список параметров';
$_['legend_limit_param'] = 'Кол. параметров:';
$_['help_limit_param'] = 'Количество параметров в раскрывающемся списке';
$_['legend_count_page'] = 'Элементов на странице:';
$_['help_count_page'] = 'Количество Значений, отображаемые на странице (Редактирование атрибута)';
$_['legend_page2top'] = 'page2top:';
$_['help_page2top'] = 'Показывать блок Пагинации вверху страницы (Редактирование атрибута)';
$_['legend_yes_statist'] = 'Статистика:';
$_['help_yes_statist'] = 'Показывать количество Товара в Атрибутах';
$_['legend_translate'] = 'Translate';
$_['help_translate'] = '!!! Экспериментальный функционал. При редактировании Значения атрибута, при клике на его Флаг, делать перевод текста';
$_['legend_lang_init_id'] = '[a-я]';
$_['help_lang_init_id'] = 'С какого Языка предполагается переводить текст';
$_['legend_optimiz_tables'] = 'OPTIMIZ.TABLES:';
$_['help_optimiz_tables'] = 'По окончанию обработки данных - Оптимизировать таблицы модуля.(может увеличивать время обработки данных в Админке)';/*Тип таблиц должен быть `MyISAM`, иначе не включайте Оптимизацию.*/
$_['legend_button_optimiz_tables'] = 'OPTIMIZE TABLES';
$_['help_button_optimiz_tables'] = 'Оптимизировать таблицы модуля.';/* Тип таблиц должен быть `MyISAM`, иначе не делайте Оптимизацию.*/

//settings scan
$_['legend_setting_scan'] = 'Настройки Cron';
$_['legend_scan_status'] = 'Cron статус:';
$_['help_scan_status'] = 'Разрешать обрабатывать по cron-планировщику';
$_['legend_scan_tabl'] = 'Данные для Cron:';
$_['help_scan_tabl'] = 'Для сканирования использовать Атрибуты';
$_['text_scan_tabl_module'] = 'из настроек модуля';
$_['text_scan_tabl_pa'] = 'табл. `product_attribute`';
$_['legend_scan_link_file_wget'] = 'Ссылка Wget:';
$_['help_scan_link_file_wget'] = 'Ссылка на cron-планировщик по Wget';
$_['legend_scan_link_file_bin'] = 'Ссылка PHP-bin:';
$_['help_scan_link_file_bin'] = 'Ссылка на cron-планировщик по PHP-bin';
$_['legend_scan_cron_wget'] = 'Cron-Wget:';
$_['help_scan_cron_wget'] = 'Будет запускаться Cron по Wget';
$_['legend_scan_secret_key'] = 'Секретный ключ:';
$_['help_scan_secret_key'] = 'Ключ/пароль, разрешающий сканирование';
$_['legend_scan_view_log'] = 'Посмотреть логи';
$_['text_scan_modal_head'] = 'Логи сканирования';
$_['clear_scan_view_log'] = 'Очистить логи';
$_['count_scan_view_log'] = 'Количество строк:';
$_['recommended_clean'] = 'рекомендуется очистить';
$_['file_empty'] = 'Файл пуст';
$_['text_succ_clear'] = 'Очищено';

//gather
$_['legend_name'] = $_['tab_gather'];
$_['help_clear_sort'] = 'Очистить сортировку';
$_['legend_gather_name'] = 'Имя Набора';
$_['error_attribute_text_all'] = ' Проверьте Значения атрибутов!';
$_['error_attribute_text_doubles'] = 'Есть дубли Атрибута!';
$_['error_attribute_text_no'] = 'Не выбрано Значение атрибута!';
$_['error_no_attribute'] = 'Не указаны Атрибуты!';
$_['error_no_gather_name'] = 'Не заполнено имя Набора!';
$_['error_yes_gather_name'] = 'Имя Набора уже существует!';
$_['error_correct_dani'] = 'Не корректные данные!';
//add_new_gather
$_['button_add_new_gather'] = 'Создать новый Набор атрибутов из списка Атрибутов, указанного ниже';
$_['text_succ_add_new_gather'] = 'Создан новый Набор атрибутов';
$_['error_no_gather'] = 'Не выбран Набор Атрибутов!';

//edit_products
$_['legend_filter'] = 'Подбор Товара';
$_['legend_category'] = 'Категория:';
$_['legend_manufacturer'] = 'Производитель:';
$_['legend_product_name'] = 'Наименование Товара:';
$_['text_list_product'] = 'Список товара';
$_['help_list_product'] = 'Посмотреть Список товара';
$_['text_count_result'] = 'Выбрано количество товара:';
$_['text_no_data'] = 'Нет данных';
$_['legend_choose_gather'] = $_['tab_gather'];
$_['button_add_gather'] = 'Добавить Набор Атрибутов в список, указанный ниже';
$_['button_add_gather_prod'] = 'Добавить Набор Атрибутов к выбранным Товарам';
$_['button_add_attrib_prod'] = 'Добавить Атрибуты к выбранным Товарам';
$_['button_add_new_value'] = 'Создать новое Значение атрибута';
$_['button_clear_poles'] = 'Очистить все Атрибуты';
$_['button_del_prod_attrib'] = 'Удалить Атрибуты у выбранных Товаров';
$_['popup_del_prod_attrib'] = 'Удалить Атрибуты у выбранных Товаров?<br /><br /><b>Если в `Подборе товара` есть Атрибут/Значение, то удаляет только эти выбранные</b>';
$_['text_succ_add'] = 'Добавлено';
$_['text_succ_dell'] = 'Удалено';
$_['legend_status'] = 'Статус товара:';
$_['legend_stock_status_id'] = 'Состояние на складе:';
$_['legend_main_store'] = 'Основной магазин';
$_['legend_stores'] = 'Магазины:';
$_['legend_dimension'] = 'Размеры (Д x Ш x В):';
$_['legend_length_class_id'] = 'Единица измерения:';
$_['legend_length'] = 'Длина:';
$_['legend_width'] = 'Ширина:';
$_['legend_height'] = 'Высота:';
$_['legend_weight_class_id'] = 'Единица веса:';
$_['help_accurate_data'] = 'вводить точные данные';
$_['legend_start'] = 'Начало';
$_['legend_end'] = 'Окончание';
$_['legend_from'] = 'от';
$_['legend_to'] = 'до';
$_['legend_option'] = 'Опция:';
$_['legend_option_value'] = 'Значение опции:';
$_['legend_date_added'] = 'Дата Нового товара:';
$_['legend_date_modified'] = 'Дата Изменения товара:';
$_['legend_date_available'] = 'Дата Поступления товара <i style="font-size:80%; font-weight:400;">(в Карт.Тов.)</i>:';
$_['help_format_date'] = 'Формат даты: ГГГГ-ММ-ДД';

//create_values
$_['help_create_values'] = 'Создать дополнительные Значения для указанного Атрибута';
$_['create_values_pole'] = array(
    'model' => 'Модель',
    'location' => 'Расположение',
    'quantity' => 'Количество',
    'stock_status_id' => 'Состояние на складе',
    'shipping' => 'Необходима доставка',
    'date_available' => 'Дата поступления',
    'weight' => 'Вес',
    'weight_class_id' => 'Ед. веса',
    'length' => 'Длина',
    'width' => 'Ширина',
    'height' => 'Высота',
    'dimension' => 'Размеры (Д x Ш x В)',
    'length_class_id' => 'Ед. длины',
    'width_class_id' => 'Ед. ширины',
    'height_class_id' => 'Ед. высоты',
    'dimension_class_id' => 'Ед. длины',
    'no_data' => 'Нет данных',
    'no_table' => 'Не выбрана таблица',
    'no_pole' => 'Не выбрано поле',
    'no_separ' => 'Не указан `Символ` во вкладке `Основные` для разделения Категорий',
);
$_['create_values_data'] = array(
    'table' => 'Таблица',
    'pole' => 'Поле',
    'where' => 'доп. Поле',
    'data_table' => 'Данные из таблицы',
);
$_['warning_no_select'] = 'Не выбрано';

//merging_attribute
$_['help_merging_attribute'] = 'Объединить';
$_['legend_main_text'] = 'Основное название';
$_['error_main_text'] = 'Не выбрано `Основное название`';
$_['legend_choice_text'] = 'В значениях атрибута';
$_['legend_choice_attribute'] = 'Атрибутов';
$_['legend_choice_attribute_group'] = 'Групп атрибутов';

//edit_values
$_['text_view_to_attrib'] = 'Посмотреть Значения атрибута';
$_['legend_search'] = 'Найти:';
$_['legend_replace'] = 'Заменить на:';
$_['button_replace'] = 'Заменить';
$_['text_in_values'] = 'У значений:';
$_['help_in_values'] = 'Если поле `Найти` оставить пустым, то прибавит в конец Значения атрибута то, что в поле `Заменить`; если наоборот – удалит то, что в поле `Найти`. Если поле `Найти` изменяет цвет рамки, значит - в начале строки есть пробел';
$_['help_search_codes'] = 'Применить кодировку для спец.символов в поле `Найти`';
$_['button_clear_all'] = 'Очистить все поля ввода';

//setting_poles
$_['legend_setting_poles'] = 'Интеграция с другими модулями';
$_['help_setting_poles'] = 'В подсказках указано, с какими модулями работает. Если данный модуль не установлен - не включайте!';
$_['legend_fix_attrtool'] = 'fix attrtool';
$_['help_fix_attrtool'] = 'Интеграция с модулем `Attribute Tooltip` | `AO Tooltips`. !!!Будьте внимательны, включая эту галку. При удалении этого модуля не забудьте отключить галку';
$_['legend_fix_fv_link_atrprod'] = 'Перелинковка';
$_['help_fix_fv_link_atrprod'] = 'Интеграция с модулем `FilterVier_SEO`. Отображать в `Карточке Товара` Значения атрибутов в виде ссылок на страницу фильтрации - Перелинковка';
$_['legend_only_link_hl'] = 'Пос.страницы';
$_['help_only_link_hl'] = 'Показывать ссылки только для Посадочных страниц `FilterVier_SEO`';
$_['legend_cls_link'] = 'class link';
$_['help_cls_link'] = 'class стиля для ссылки';
$_['legend_multi_attrib'] = 'multi-attrib';
$_['help_multi_attrib'] = 'Выбирать несколько Атрибутов для перелинковки. Требуется установка дополинтельного модификатора - `attribute_text_select_fix_multi_attrib`';
$_['legend_prevent_link'] = 'Блок.ссылку';
$_['help_prevent_link'] = 'Блокировать ссылку при выборе `multi-attrib`';
$_['legend_absolute_btn_link'] = 'Фикс.кнопка';
$_['help_absolute_btn_link'] = 'Фиксированная кнопка при выборе `multi-attrib`. По умолчанию расположение вверху блока Характеристик';
$_['legend_btn_bottom'] = 'Кнопка внизу';
$_['help_btn_bottom'] = 'Нижнее расположение кнопки в блоке Характеристик';
$_['legend_button_link'] = 'Стиль кнопки';
$_['help_button_link'] = 'Подключить стиль для кнопки или создать собственный и подключить. Файлы расположены в папке по пути /catalog/view/theme/default/stylesheet/attribute_text_select/button_link/';

//suss
$_['text_succ_record'] = 'Записаны';
$_['text_succ_update'] = 'Данные обновлены';
$_['text_succ_remove'] = 'Удалено';

//popup
$_['text_popup'] = 'Вы переходите на другую вкладку.<br />Сохранить данные?';
$_['text_saved'] = 'уже Сохранено';
$_['text_remove'] = 'Удалить?';
$_['text_go_to_attrib'] = 'Перейти к Атрибутам';
$_['text_go_to_group_attrib'] = 'Перейти к Группам Атрибутов';
$_['text_go_to_products'] = 'Перейти к Товарам';

// Text
$_['text_module'] = 'Модуль';
$_['text_success'] = 'Настройки модуля обновлены!';
$_['text_edit'] = 'Редактирование модуля';
$_['text_home'] = 'Главная';
$_['text_yes'] = 'Да';
$_['text_no'] = 'Нет';
$_['text_left'] = 'Левое';
$_['text_right'] = 'Правое';
$_['text_center'] = 'По центру';
$_['text_full_width'] = 'На всю ширину';
$_['text_clear'] = 'Очистить';
$_['text_close_success'] = 'Закрыть окно';
$_['text_warn_text_id'] = ' заново? Внимание - Значения перезапишутся !!!';
$_['text_unknown'] = 'неизвестно';

//button
$_['button_save'] = 'Сохранить';
$_['button_remove'] = 'Удалить';
$_['button_delete'] = 'Удалить выбранные';
$_['button_cancel'] = 'Отменить';
$_['button_apply'] = 'Применить';
$_['button_edit'] = 'Редактировать';
$_['button_yes'] = 'Да';
$_['button_no'] = 'Нет';
$_['button_copy'] = 'Копировать';
$_['button_add'] = 'Добавить';
$_['button_lic'] = 'Активировать';
$_['button_get_key'] = 'Запросить';
$_['button_reset'] = 'Сбросить';

//help_button
$_['button_help_apply'] = 'Сохранить и остаться на странице';
$_['button_help_save'] = 'Сохранить и выйти';
$_['button_help_exit'] = 'Выйти';

// Entry
$_['entry_status'] = 'Статус:';
$_['entry_help_status'] = 'Включить/Отключить модуль. Если статус отключен, то отображаются Значения атрибутов из стандартной таблицы `product_attribute` и в Атрибутах админки они НЕ показываются!!!';

//Warning
$_['warning_no_attribs'] = 'не выбраны Атрибуты';
$_['warning_log_attribs'] = 'перейти к логам Операций';

// Error
$_['error_permission'] = 'У Вас нет прав для управления этим модулем!';
//rezerv
$_['text_permission'] = 'У Вас нет прав для управления этим модулем!';
$_['text_not_found'] = 'Страница не найдена!';

//ohters
$_['text_avtor'] = 'Посмотреть обновление модуля, а так же другие разработки автора Vier: ';
$_['text_lic'] = 'Введите лицензионный ключ:';
$_['text_get_key'] = 'Активировать лицензионный ключ:';
$_['text_zapis'] = 'Записать';
$_['err_time_out'] = 'Превышен лимит.';
$_['err_no_domen'] = 'Нет данных.';
$_['err_bag_domen'] = 'ERROR.';
$_['err_no_prod'] = 'ERROR product.';
$_['err_error'] = 'Ошибка запроса.';
$_['visit_mail'] = 'Запрос отправлен на обработку. Связь с разработчиком: %s (В письме указывать Ваш домен, номер счета и где приобретали модуль)';
$_['text_inform_module'] = 'Информация о модуле';

?>