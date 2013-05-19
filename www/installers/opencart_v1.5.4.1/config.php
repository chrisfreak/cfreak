<?php
// HTTP
define('HTTP_SERVER', 'http://{subdomain}.{domain}/');
define('HTTP_IMAGE', 'http://{subdomain}.{domain}/image/');
define('HTTP_ADMIN', 'http://{subdomain}.{domain}/admin/');

// HTTPS
define('HTTPS_SERVER', 'http://{subdomain}.{domain}/');
define('HTTPS_IMAGE', 'http://{subdomain}.{domain}/image/');

// DIR
define('DIR_APPLICATION', '{basePath}/catalog/');
define('DIR_SYSTEM', '{basePath}/system/');
define('DIR_DATABASE', '{basePath}/system/database/');
define('DIR_LANGUAGE', '{basePath}/catalog/language/');
define('DIR_TEMPLATE', '{basePath}/catalog/view/theme/');
define('DIR_CONFIG', '{basePath}/system/config/');
define('DIR_IMAGE', '{basePath}/image/');
define('DIR_CACHE', '{basePath}/system/cache/');
define('DIR_DOWNLOAD', '{basePath}/download/');
define('DIR_LOGS', '{basePath}/logs/');

// DB
define('DB_DRIVER', '{dbDriver}');
define('DB_HOSTNAME', '{dbHost}');
define('DB_USERNAME', '{dbUsername}');
define('DB_PASSWORD', '{dbPass}');
define('DB_DATABASE', '{dbName}');
define('DB_PREFIX', '{dbPrefix}');
?>