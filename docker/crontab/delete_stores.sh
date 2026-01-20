#!/bin/bash

# Загружаем переменные среды
source "$(dirname "$(realpath "$0")")/load_env.sh"

# Проверяем, заданы ли все необходимые переменные окружения
if [[ -z "$MYSQL_HOST" || -z "$MYSQL_USER" || -z "$MYSQL_PASSWORD" || -z "$MYSQL_DATABASE" ]]; then
    echo "Ошибка: Отсутствуют необходимые переменные окружения (MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE)"
    exit 1
fi

# Подключаемся к MySQL и выполняем очистку всех таблиц, связанных с магазинами
mysql -h "$MYSQL_HOST" -u "$MYSQL_USER" -p"$MYSQL_PASSWORD" "$MYSQL_DATABASE" <<EOF
SET FOREIGN_KEY_CHECKS = 0; -- Отключаем проверку внешних ключей

-- Удаляем данные из таблиц, связанных с магазинами
TRUNCATE TABLE oc_category_to_store;
TRUNCATE TABLE oc_product_to_store;
TRUNCATE TABLE oc_information_to_store;
DELETE FROM oc_layout_route WHERE store_id IN (SELECT store_id FROM oc_store);
DELETE FROM oc_setting WHERE store_id IN (SELECT store_id FROM oc_store);

TRUNCATE TABLE oc_store;

SET FOREIGN_KEY_CHECKS = 1; -- Включаем проверку внешних ключей
EOF

# Проверяем статус выполнения
if [ $? -eq 0 ]; then
    echo "Все таблицы, связанные с магазинами, успешно очищены, и автоинкремент сброшен."
else
    echo "Ошибка при очистке таблиц, связанных с магазинами, или сбросе автоинкремента."
    exit 1
fi
