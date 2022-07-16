<?php

namespace Ecommerce\Controllers;

class controller
{
    private $_controller;
    private $_action;
    private $_params;

    public function setController($controllerName)
    {
        $this->_controller = $controllerName;
    }

    public function setAction($actionName)
    {
        $this->_action = $actionName;
    }
    public function setParams($params)
    {
        $this->_params = $params;
    }
}
