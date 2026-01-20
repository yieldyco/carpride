#!/bin/bash

# Определяем путь к файлу .env (на два уровня выше)
ENV_FILE="$(dirname "$(dirname "$(realpath "$0")")")/../.env"

# Функция для проверки, запущен ли скрипт внутри контейнера
is_container() {
    # Проверка признаков контейнера
    if grep -q '/docker/' /proc/self/cgroup 2>/dev/null || [ -f /.dockerenv ]; then
        return 0 # В контейнере
    else
        return 1 # Не в контейнере
    fi
}

# Проверяем, запущено ли внутри контейнера
if is_container; then
    echo "Запущено в контейнере. Пропускаем загрузку переменных из .env."
else
    if [ -f "$ENV_FILE" ]; then
        echo "Загружаем переменные из $ENV_FILE..."
        export $(grep -v '^#' "$ENV_FILE" | xargs)
    else
        echo "Файл .env не найден по пути $ENV_FILE!"
        exit 1
    fi
fi
