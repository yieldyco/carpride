FROM alpine:latest

# Объявляем аргумент для этапа сборки
ARG BACKUP_DIR

ARG TZ
ENV TZ=${TZ}

# Устанавливаем необходимые пакеты
RUN apk add --no-cache mysql-client bash busybox-suid tzdata


# Копируем данные о временных зонах и применяем их
RUN cp /usr/share/zoneinfo/${TZ} /etc/localtime && echo "${TZ}" > /etc/timezone

# Копируем скрипт бэкапа в контейнер
COPY load_env.sh /usr/local/bin/load_env.sh
COPY backup.sh /usr/local/bin/backup.sh
COPY restore.sh /usr/local/bin/restore.sh
COPY delete_customers.sh /usr/local/bin/delete_customers.sh
COPY delete_orders.sh /usr/local/bin/delete_orders.sh
COPY delete_products.sh /usr/local/bin/delete_products.sh
COPY delete_stores.sh /usr/local/bin/delete_stores.sh

# Устанавливаем права на выполнение
RUN chmod +x /usr/local/bin/load_env.sh
RUN chmod +x /usr/local/bin/backup.sh
RUN chmod +x /usr/local/bin/restore.sh
RUN chmod +x /usr/local/bin/delete_customers.sh
RUN chmod +x /usr/local/bin/delete_orders.sh
RUN chmod +x /usr/local/bin/delete_products.sh
RUN chmod +x /usr/local/bin/delete_stores.sh

# Настраиваем cron задание
COPY crontab /etc/crontabs/root

# Устанавливаем переменную среды для контейнера
ENV BACKUP_DIR=${BACKUP_DIR}


# Создаем директорию для бэкапов
RUN mkdir -p ${BACKUP_DIR}

# Указываем точку монтирования для сохранения бэкапов на хосте
VOLUME ${BACKUP_DIR}

# Запуск cron в фоне
CMD ["crond", "-f"]
