# Используем базовый образ mariadb:latest
FROM mariadb:11.5.2

# Устанавливаем необходимые пакеты, включая tzdata для настройки временной зоны
RUN apt-get update && \
    apt-get install -y tzdata mariadb-client && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Настраиваем временную зону на Europe/Kiev
ENV TZ=Europe/Kiev

# Устанавливаем временную зону в системе
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && \
    echo $TZ > /etc/timezone

# Копируем файл конфигурации MariaDB (если есть)
COPY my.cnf /etc/mysql/my.cnf
