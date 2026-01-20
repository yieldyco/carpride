#!/bin/bash

# Загружаем переменные среды
source "$(dirname "$(realpath "$0")")/load_env.sh"

# Проверяем, заданы ли все необходимые переменные окружения
if [[ -z "$MYSQL_HOST" || -z "$MYSQL_USER" || -z "$MYSQL_PASSWORD" || -z "$MYSQL_DATABASE" ]]; then
    echo "Ошибка: Отсутствуют необходимые переменные окружения (MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE)"
    exit 1
fi

# Подключаемся к MySQL и выполняем очистку всех таблиц
mysql -h "$MYSQL_HOST" -u "$MYSQL_USER" -p"$MYSQL_PASSWORD" "$MYSQL_DATABASE" <<EOF
SET FOREIGN_KEY_CHECKS = 0; -- Отключаем проверку внешних ключей

-- Очищаем все таблицы, связанные с клиентами
TRUNCATE TABLE oc_customer_activity;
TRUNCATE TABLE oc_customer_affiliate;
TRUNCATE TABLE oc_customer_approval;
TRUNCATE TABLE oc_customer_history;
TRUNCATE TABLE oc_customer_ip;
TRUNCATE TABLE oc_customer_login;
TRUNCATE TABLE oc_customer_online;
TRUNCATE TABLE oc_customer_reward;
TRUNCATE TABLE oc_customer_search;
TRUNCATE TABLE oc_customer_sync_status;
TRUNCATE TABLE oc_customer_transaction;
TRUNCATE TABLE oc_customer_wishlist;

-- Очищаем основную таблицу клиентов
TRUNCATE TABLE oc_customer;

SET FOREIGN_KEY_CHECKS = 1; -- Включаем проверку внешних ключей
EOF

# Проверяем статус выполнения
if [ $? -eq 0 ]; then
    echo "Все таблицы успешно очищены с использованием TRUNCATE."
else
    echo "Ошибка при очистке таблиц с использованием TRUNCATE."
    exit 1
fi
