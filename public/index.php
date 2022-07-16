<?php

namespace Ecommerce;

use Ecommerce\RequestCycle\kernal;

require_once '..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config.php';
require_once APP_PATH . DS . 'lib' . DS . 'autoload.php';

$kernal = new kernal();
$kernal->dispatch();
