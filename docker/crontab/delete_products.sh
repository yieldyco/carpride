#!/bin/bash

# Загружаем переменные среды
source "$(dirname "$(realpath "$0")")/load_env.sh"

# Проверяем, заданы ли все необходимые переменные окружения
if [[ -z "$MYSQL_HOST" || -z "$MYSQL_USER" || -z "$MYSQL_PASSWORD" || -z "$MYSQL_DATABASE" ]]; then
    echo "Ошибка: Отсутствуют необходимые переменные окружения (MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE)"
    exit 1
fi

# Подключаемся к MySQL и выполняем очистку всех таблиц, связанных с товарами
mysql -h "$MYSQL_HOST" -u "$MYSQL_USER" -p"$MYSQL_PASSWORD" "$MYSQL_DATABASE" <<EOF
SET FOREIGN_KEY_CHECKS = 0; -- Отключаем проверку внешних ключей

-- Очищаем все таблицы, связанные с товарами
TRUNCATE TABLE oc_product_attribute;
TRUNCATE TABLE oc_product_description;
TRUNCATE TABLE oc_product_discount;
TRUNCATE TABLE oc_product_filter;
TRUNCATE TABLE oc_product_image;
TRUNCATE TABLE oc_product_option;
TRUNCATE TABLE oc_product_option_value;
TRUNCATE TABLE oc_product_recurring;
TRUNCATE TABLE oc_product_related;
TRUNCATE TABLE oc_product_reward;
TRUNCATE TABLE oc_product_special;
TRUNCATE TABLE oc_product_to_category;
TRUNCATE TABLE oc_product_to_download;
TRUNCATE TABLE oc_product_to_layout;
TRUNCATE TABLE oc_product_to_store;

-- Очищаем основную таблицу товаров
TRUNCATE TABLE oc_product;

SET FOREIGN_KEY_CHECKS = 1; -- Включаем проверку внешних ключей
EOF

# Проверяем статус выполнения
if [ $? -eq 0 ]; then
    echo "Все таблицы, связанные с товарами, успешно очищены с использованием TRUNCATE."
else
    echo "Ошибка при очистке таблиц, связанных с товарами, с использованием TRUNCATE."
    exit 1
fi
