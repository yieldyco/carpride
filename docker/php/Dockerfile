# Используем базовый образ PHP 8.2-FPM
FROM php:8.3.14-fpm

# Установка зависимостей и PHP-расширений для OpenCart
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    pkg-config \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip pdo pdo_mysql php-mysqli mbstring exif bcmath opcache curl intl \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN docker-php-ext-install pdo_mysql
# Устанавливаем Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Устанавливаем зависимости для mysqli
RUN apt-get update && apt-get install -y libmariadb-dev && \
    docker-php-ext-install mysqli

RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install zip \
    && docker-php-ext-enable zip


# Установка GD и других зависимостей
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install gd

RUN docker-php-ext-install curl

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#RUN chown -R www-data:www-data /var/www/html/storage
#RUN chmod -R 755 /var/www/html/storage

# Настраиваем права доступа
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \; \
    && [ -d /var/www/html/system/storage/ ] && chmod -R 775 /var/www/html/system/storage/ || true \
    && [ -d /var/www/storage/ ] && chmod -R 775 /var/www/storage/ || true \
    && [ -d /var/www/html/image/ ] && chmod -R 775 /var/www/html/image/ || true \
    && [ -f /var/www/html/admin/config.php ] && chmod 775 /var/www/html/admin/config.php || true \
    && [ -f /var/www/html/config.php ] && chmod 775 /var/www/html/config.php || true

RUN chown -R www-data:www-data /var/www/html

# Указываем рабочую директорию
WORKDIR /var/www/html


# Запуск контейнера
CMD ["php-fpm"]
