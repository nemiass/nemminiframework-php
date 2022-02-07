<?php

namespace app\core;

use const config\DEFAULT_ACTION;
use const config\DEFAULT_CONTROLLER;

// Clase Router, se usaría en caso se necesite implementarolo

class Router
{
    private Request $request;
    private $response;

    private array $array_url;
    private $controller;
    private $action;
    private $params;

    public function __construct(Request $request, $response = null)
    {
        $this->request = $request;
        $this->response = $response;
        $this->setArrayUrl();
    }

    public function setArrayUrl()
    {
        $this->array_url = [];

        if ($this->request->getUrl() != "") {
            $this->array_url = explode("/", $this->request->getUrl());
        }
    }

    public function getController()
    {
        $dc = DEFAULT_CONTROLLER;
        $this->controller = ucwords(empty($this->array_url) ? $dc : $this->array_url[0]);
        return $this->controller;
    }

    public function getControllerName()
    {
        return $this->getController() . "Controller";
    }

    public function getAction()
    {
        $da = DEFAULT_ACTION;
        $this->action = !isset($this->array_url[1]) ? $da : $this->array_url[1];
        return $this->action;
    }

    public function getParams()
    {
        $this->params = isset($this->array_url[2]) ? array_slice($this->array_url, 2) : [];
        return $this->params;
    }

    public function renderView($view, $data)
    {
        App::$app->view->renderView($view, $data);
    }
}
