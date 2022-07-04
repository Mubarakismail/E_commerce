<?php

namespace Ecommerce\lib;

class autoload
{
    public static function autoload($className)
    {
        echo 'text';
    }
}
spl_autoload_register(__NAMESPACE__ . '\autoload::autoload');
