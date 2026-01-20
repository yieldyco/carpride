# Используем стабильный и легкий Debian образ
FROM debian:bookworm-slim

# Объявляем аргументы для этапа сборки
ARG BACKUP_DIR
ARG TZ
ENV TZ=${TZ}

# Обновляем репозитории и устанавливаем необходимые пакеты
# default-mysql-client в Debian полностью совместим с MySQL 8.0
RUN apt-get update && apt-get install -y --no-install-recommends \
    default-mysql-client \
    bash \
    cron \
    tzdata \
    procps \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Настраиваем временную зону
RUN ln -snf /usr/share/zoneinfo/${TZ} /etc/localtime && echo "${TZ}" > /etc/timezone

# Копируем скрипты в контейнер
COPY load_env.sh /usr/local/bin/load_env.sh
COPY backup.sh /usr/local/bin/backup.sh
COPY restore.sh /usr/local/bin/restore.sh
COPY delete_customers.sh /usr/local/bin/delete_customers.sh
COPY delete_orders.sh /usr/local/bin/delete_orders.sh
COPY delete_products.sh /usr/local/bin/delete_products.sh
COPY delete_stores.sh /usr/local/bin/delete_stores.sh

# Устанавливаем права на выполнение для всех скриптов
RUN chmod +x /usr/local/bin/*.sh

# Настраиваем cron задачу
# В Debian мы копируем файл в /etc/cron.d/ и регистрируем его
COPY crontab /etc/cron.d/backup-cron
RUN chmod 0644 /etc/cron.d/backup-cron && \
    crontab /etc/cron.d/backup-cron

# Устанавливаем переменную среды для директории бэкапов
ENV BACKUP_DIR=${BACKUP_DIR}

# Создаем директорию для бэкапов
RUN mkdir -p ${BACKUP_DIR}

# Указываем точку монтирования
VOLUME ${BACKUP_DIR}

# Запуск cron в фоновом режиме
# -f заставляет cron работать на переднем плане, чтобы контейнер не закрылся
CMD ["cron", "-f"]
