# Используем базовый образ PHP 8.2-FPM
FROM php:7.4.33-fpm

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

RUN pecl install redis && docker-php-ext-enable redis

# Устанавливаем Xdebug
RUN pecl install xdebug-3.1.6 \
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

# --- ionCube Loader ---
# Скачиваем ionCube под архитектуру контейнера и подключаем как zend_extension
RUN set -eux; \
    arch="$(dpkg --print-architecture)"; \
    case "$arch" in \
      amd64) ion_arch="x86-64" ;; \
      arm64) ion_arch="aarch64" ;; \
      *) echo "Unsupported architecture for ionCube: $arch" >&2; exit 1 ;; \
    esac; \
    curl -fsSL "https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_${ion_arch}.tar.gz" -o /tmp/ioncube.tar.gz; \
    tar -xzf /tmp/ioncube.tar.gz -C /tmp; \
    ext_dir="$(php -r 'echo ini_get("extension_dir");')"; \
    cp "/tmp/ioncube/ioncube_loader_lin_7.4.so" "${ext_dir}/ioncube_loader_lin_7.4.so"; \
    echo "zend_extension=${ext_dir}/ioncube_loader_lin_7.4.so" > "${PHP_INI_DIR}/conf.d/00-ioncube.ini"; \
    rm -rf /tmp/ioncube /tmp/ioncube.tar.gz; \
    php -v | grep -i "ionCube" || true
# --- /ionCube Loader ---

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Настройка таймзоны
ENV TZ=Europe/Kyiv
RUN apt-get update && apt-get install -y tzdata \
    && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime \
    && echo $TZ > /etc/timezone \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*



#RUN chown -R www-data:www-data /var/www/html/storage
#RUN chmod -R 755 /var/www/html/storage

# Настраиваем права доступа
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \; \
    && find /var/www/update_catalog -type d -exec chmod 755 {} \; \
    && find /var/www/update_catalog -type f -exec chmod 644 {} \; \
    && [ -d /var/www/system/ ] && chmod -R 775 /var/www/system/ || true \
    && [ -d /var/www/storage/ ] && chmod -R 775 /var/www/storage/ || true \
    && [ -d /var/www/html/image/ ] && chmod -R 775 /var/www/html/image/ || true \
    && [ -f /var/www/html/admin/config.php ] && chmod 775 /var/www/html/admin/config.php || true \
    && [ -f /var/www/html/config.php ] && chmod 775 /var/www/html/config.php || true

RUN chown -R www-data:www-data /var/www/html

# Указываем рабочую директорию
WORKDIR /var/www/html


# Запуск контейнера
CMD ["php-fpm"]
