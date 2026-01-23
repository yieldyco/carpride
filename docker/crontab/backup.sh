#!/bin/bash

# Загружаем переменные среды
source "$(dirname "$(realpath "$0")")/load_env.sh"

# Текущая дата для создания папок и имени файла
YEAR=$(date +%Y)
MONTH=$(date +%m)
DAY=$(date +%d)
TIME=$(date +%H-%M-%S)

# Директория для бэкапов (разбивка по годам, месяцам и дням)
FULL_BACKUP_DIR="${BACKUP_DIR}/$YEAR/$MONTH/$DAY"

# Создаем папки для бэкапов, если они не существуют
mkdir -p $FULL_BACKUP_DIR

# Имя файла бэкапа с датой и временем
BACKUP_FILE="$FULL_BACKUP_DIR/backup-$YEAR-$MONTH-$DAY-$TIME.sql"
# Имя архива
ARCHIVE_FILE="$BACKUP_FILE.gz"

# Выполняем бэкап базы данных
mysqldump -h $MYSQL_HOST -u $MYSQL_USER -p"$MYSQL_PASSWORD" $MYSQL_DATABASE > $BACKUP_FILE

# Проверка успешности создания бэкапа
if [ $? -eq 0 ]; then
    echo "Backup $BACKUP_FILE created successfully"

    # Архивируем бэкап
    gzip $BACKUP_FILE

    if [ $? -eq 0 ]; then
        echo "Backup $BACKUP_FILE has been archived as $ARCHIVE_FILE"

        # Экспорт переменной ARCHIVE_FILE для использования в других процессах
        export ARCHIVE_FILE=$ARCHIVE_FILE

        # Записываем ARCHIVE_FILE в файл для последующего использования
        echo "ARCHIVE_FILE=${ARCHIVE_FILE}" > "${FULL_BACKUP_DIR}/.env"

        echo "ARCHIVE_FILE is set to $ARCHIVE_FILE and saved in ${FULL_BACKUP_DIR}/.env"
    else
        echo "Failed to archive the backup"
        exit 1
    fi
else
    echo "Backup failed"
    exit 1
fi
