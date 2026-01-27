<?php

// HTTP
define('HTTP_SERVER',  getenv('HTTP_SERVER'));

// HTTPS
define('HTTPS_SERVER', getenv('HTTPS_SERVER'));

// DIR
define('DIR_APPLICATION', getenv('DIR_APPLICATION'));
define('DIR_SYSTEM', getenv('DIR_SYSTEM'));
define('DIR_IMAGE', getenv('DIR_IMAGE'));
define('DIR_STORAGE', getenv('DIR_STORAGE'));
define('UPDATE_CATALOG_FILE_PATH', getenv('UPDATE_CATALOG_FILE_PATH'));
define('READY_PRODUCTS_CSV_PATH', getenv('READY_PRODUCTS_CSV_PATH'));
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', getenv('MYSQL_DB_DRIVER'));
define('DB_HOSTNAME', getenv('MYSQL_HOST'));
define('DB_USERNAME', getenv('MYSQL_USER'));
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define('DB_DATABASE', getenv('MYSQL_DATABASE'));
define('DB_PORT', getenv('MYSQL_PORT'));
define('DB_PREFIX', getenv('MYSQL_DB_PREFIX'));

// Redis Cache
define('CACHE_DRIVER', getenv('CACHE_DRIVER'));
define('CACHE_HOSTNAME', getenv('CACHE_HOSTNAME'));
define('CACHE_PORT', getenv('CACHE_PORT'));
define('CACHE_PREFIX', getenv('CACHE_PREFIX'));

// Debug mode
define('DEBUG', getenv('DEBUG', false));
