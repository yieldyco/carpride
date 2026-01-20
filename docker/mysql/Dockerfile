# Используем базовый образ mysql:8.0
FROM mysql:8.0

# Устанавливаем необходимые пакеты, включая tzdata для настройки временной зоны
# В MySQL 8.0 используется стандартный mysql-client
RUN apt-get update && \
    apt-get install -y tzdata mysql-client && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Настраиваем временную зону на Europe/Kiev
ENV TZ=Europe/Kiev

# Устанавливаем временную зону в системе
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && \
    echo $TZ > /etc/timezone

# Копируем файл конфигурации MySQL
# Путь в MySQL 8.0 обычно /etc/mysql/conf.d/ или /etc/mysql/my.cnf
COPY my.cnf /etc/mysql/my.cnf
