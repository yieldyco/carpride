#!/bin/bash

# Загружаем переменные среды
source "$(dirname "$(realpath "$0")")/load_env.sh"

# Проверяем, заданы ли все необходимые переменные окружения
if [[ -z "$MYSQL_HOST" || -z "$MYSQL_USER" || -z "$MYSQL_PASSWORD" || -z "$MYSQL_DATABASE" ]]; then
    echo "Ошибка: Отсутствуют необходимые переменные окружения (MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE)"
    exit 1
fi

# Подключаемся к MySQL и выполняем очистку всех таблиц, связанных с заказами
mysql -h "$MYSQL_HOST" -u "$MYSQL_USER" -p"$MYSQL_PASSWORD" "$MYSQL_DATABASE" <<EOF
SET FOREIGN_KEY_CHECKS = 0; -- Отключаем проверку внешних ключей

-- Очищаем все таблицы, связанные с заказами
TRUNCATE TABLE oc_order_history;
TRUNCATE TABLE oc_order_option;
TRUNCATE TABLE oc_order_product;
TRUNCATE TABLE oc_order_recurring;
TRUNCATE TABLE oc_order_recurring_transaction;
TRUNCATE TABLE oc_order_shipment;
TRUNCATE TABLE oc_order_total;
TRUNCATE TABLE oc_order_voucher;
TRUNCATE TABLE oc_kbloyalty_points;
TRUNCATE TABLE oc_kbloyalty_points_balance;
TRUNCATE TABLE oc_kbloyalty_points_bonus_category;
TRUNCATE TABLE oc_kbloyalty_points_bonus_type;

-- Очищаем основную таблицу заказов
TRUNCATE TABLE oc_order;

SET FOREIGN_KEY_CHECKS = 1; -- Включаем проверку внешних ключей
EOF

# Проверяем статус выполнения
if [ $? -eq 0 ]; then
    echo "Все таблицы, связанные с заказами, успешно очищены с использованием TRUNCATE."
else
    echo "Ошибка при очистке таблиц, связанных с заказами, с использованием TRUNCATE."
    exit 1
fi
