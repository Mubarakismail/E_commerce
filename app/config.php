<?php

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

defined('APP_PATH') ? null : define('APP_PATH', realpath(dirname(__FILE__)));
defined('VIEW_PATH') ? null : define('VIEW_PATH', APP_PATH . DS . 'views');
defined('Models_PATH') ? null : define('Models_PATH', APP_PATH . DS . 'models');
defined('Database_host_name') ? null : define('Database_host_name', 'localhost');
defined('Database_port_number') ? null : define('Database_port_number', 3306);
defined('Database_name') ? null : define('Database_name', 'ecommerce');
defined('Database_password') ? null : define('Database_password', '');
defined('Database_username') ? null : define('Database_username', 'root');
defined('DATABASE_CONNECTION_DRIVER') ? null : define('DATABASE_CONNECTION_DRIVER', 1);
