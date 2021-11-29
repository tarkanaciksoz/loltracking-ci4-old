<?php

/*
 |--------------------------------------------------------------------------
 | ERROR DISPLAY
 |--------------------------------------------------------------------------
 | Don't show ANY in production environments. Instead, let the system catch
 | it and display a generic error message.
 */
ini_set('display_errors', '0');
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);

/*
 |--------------------------------------------------------------------------
 | DEBUG MODE
 |--------------------------------------------------------------------------
 | Debug mode is an experimental flag that can allow changes throughout
 | the system. It's not widely used currently, and may not survive
 | release of the framework.
 */
defined('CI_DEBUG') || define('CI_DEBUG', false);
define('BASE_URL', getenv('BASE_URL'));
define('API_URL', getenv('API_URL'));
define('API_DB_HOST', getenv('API_DB_HOST'));
define('API_DB_NAME', getenv('API_DB_NAME'));
define('API_DB_USER', getenv('API_DB_USER'));
define('API_DB_PASS', getenv('API_DB_PASS'));
define('MASTER_DB_HOST', getenv('MASTER_DB_HOST'));
define('MASTER_DB_NAME', getenv('MASTER_DB_NAME'));
define('MASTER_DB_USER', getenv('MASTER_DB_USER'));
define('MASTER_DB_PASS', getenv('MASTER_DB_PASS'));
