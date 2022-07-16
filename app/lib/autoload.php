<?php

namespace Ecommerce\lib;

class autoload
{
    public static function autoload($className)
    {
        $className = str_replace('Ecommerce\\', '', $className);
        $className[0] = strtolower($className[0]);
        if (file_exists(APP_PATH . DS . $className . '.php')) {
            require_once APP_PATH . DS . $className . '.php';
        }
    }
}
spl_autoload_register(__NAMESPACE__ . '\autoload::autoload');
