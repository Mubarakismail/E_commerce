<?php

namespace Ecommerce\Controllers;

class indexController
{
    private $_controller = 'home';
    private $_action = 'default';
    private $_params = array();

    public function __construct()
    {
        $this->_parseUrl();
    }

    private function _parseUrl()
    {
        $url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'), 3);
        if (isset($url[0]) && $url[0] != '') {
            $this->_controller = $url[0];
        }
        if (isset($url[1]) && $url[1] != '') {
            $this->_action = $url[1];
        }
        if (isset($url[2]) && $url[2] != '') {
            $this->_params = explode('/', $url[2]);
        }
    }

    public function dispatch()
    {
        $controllerName = 'Ecommerce\Controllers' . DS . $this->_controller . 'Controller';
        $action = $this->_action;
        if (!class_exists($controllerName)) {
            $controllerName = 'Ecommerce\Controllers\notFoundController';
        }
        $controller = new $controllerName();
        if (!method_exists($controller, $this->_action)) {
            $action = 'notFoundAction';
        }
        $controller->$action();
    }
}