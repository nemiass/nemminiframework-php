<?php

namespace app\core;

// Clase Router, se usaría en caso se necesite implementarolo

class Router
{
    private Request $request;
    private $response;

    private $array_url;
    private $controller;
    private $action;
    private $params;

    public function __construct(Request $request, $response=null)
    {
        $this->request = $request;
        $this->response = $response;
        $this->setArrayUrl();
    }

    public function setArrayUrl()
    {
        $this->array_url = explode("/", trim($this->request->getUrl(), "/"));
    }

    public function getController()
    {
        $config = Config::getInstance();
        $this->controller = ucwords($config->get("DEFAULT_CONTROLLER"));
        if(isset($this->array_url[1])) 
        {
            $this->controller = ucwords($this->array_url[1]);
        }
        return $this->controller;
    }

    public function getControllerName()
    {
        return $this->getController()."Controller";
    }

    public function getAction()
    {
        $config = Config::getInstance();
        $this->action = ucwords($config->get("DEFAULT_ACTION"));
        if(isset($this->array_url[2])) 
        {
            $this->action = $this->array_url[2];
        }
        return $this->action;
    }

    public function getParams()
    {
        $this->params = isset($this->array_url[3]) ? array_slice($this->array_url, 3) : [];   
        return $this->params;
    }

    public function renderView($view, $data)
    {
        App::$app->view->renderView($view, $data);
    }
}
