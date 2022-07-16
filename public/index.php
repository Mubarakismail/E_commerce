<?php

namespace Ecommerce;

use Ecommerce\Controllers\indexController;

require_once '..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config.php';
require_once APP_PATH . DS . 'lib' . DS . 'autoload.php';

$controller = new indexController();
$controller->dispatch();
