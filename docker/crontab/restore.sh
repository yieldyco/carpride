#!/bin/bash

# Загружаем переменные среды
source "$(dirname "$(realpath "$0")")/load_env.sh"

# Переменные по умолчанию
BACKUP_FILE=""
ENV_FILE=""                 # Путь к файлу .env

# Функция для отображения помощи
usage() {
    echo "Usage: $0 [-f <backup_file>]"
    echo "       If -f is not specified, ARCHIVE_FILE from .env file will be used (with higher priority than environment variable)."
    exit 1
}

# Парсим аргументы
while getopts "f:" opt; do
    case "$opt" in
        f) BACKUP_FILE="$OPTARG" ;;
        *) usage ;;
    esac
done

# Если флаг -f не передан, проверяем .env файл
if [ -z "$BACKUP_FILE" ]; then
    BACKUP_ENV_FILE=$(find ${BACKUP_DIR} -name ".env" | sort | tail -n 1)  # Находим последний .env файл
    if [ -f "$BACKUP_ENV_FILE" ]; then
        echo "Loading environment variables from $BACKUP_ENV_FILE..."
        source "$BACKUP_ENV_FILE"
        BACKUP_FILE="$ARCHIVE_FILE"
        echo "Using ARCHIVE_FILE from .env: $BACKUP_FILE"
    elif [ -n "$ARCHIVE_FILE" ]; then
        # Если .env файл не найден, используем переменную окружения
        BACKUP_FILE="$ARCHIVE_FILE"
        echo "Using ARCHIVE_FILE from environment: $BACKUP_FILE"
    else
        echo "Error: No backup file specified, and neither ARCHIVE_FILE environment variable nor .env file found."
        usage
    fi
fi

# Проверяем, существует ли файл
if [ ! -f "$BACKUP_FILE" ]; then
    echo "Error: File $BACKUP_FILE does not exist."
    exit 1
fi

# Определяем, нужно ли разархивировать файл
if [[ "$BACKUP_FILE" == *.gz ]]; then
    echo "Extracting the backup file..."
    gunzip -c "$BACKUP_FILE" > /tmp/backup.sql
    RESTORE_FILE="/tmp/backup.sql"
else
    RESTORE_FILE="$BACKUP_FILE"
fi

# Восстанавливаем базу данных
echo "Restoring database from $RESTORE_FILE..."
mysql -h $MYSQL_HOST -u $MYSQL_USER -p"$MYSQL_PASSWORD" $MYSQL_DATABASE < "$RESTORE_FILE"

# Проверяем успешность восстановления
if [ $? -eq 0 ]; then
    echo "Database restored successfully from $BACKUP_FILE"
else
    echo "Failed to restore database"
    exit 1
fi

# Удаляем временный файл, если он был создан
if [ "$RESTORE_FILE" == "/tmp/backup.sql" ]; then
    rm -f /tmp/backup.sql
fi
