<?php

namespace Ecommerce\Database;

use PDO;
use PDOException;

class PDODatabaseHandler extends databaseHandler
{
    private static $_instance;
    private static $_handler;
    public function __construct()
    {
        self::init();
    }
    public static function init()
    {
        $db_host = Database_host_name;
        $db_port = Database_port_number;
        $db_name = Database_name;
        $db_username = Database_username;
        $db_password = Database_password;
        $db_conn = DATABASE_CONNECTION_DRIVER;
        try {
            self::$_handler = new PDO("mysql:host:$db_host;
            port=$db_port;db_name=$db_name", $db_username, $db_password, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ));
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}
