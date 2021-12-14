<?php

namespace app\core;

class App
{
    private Controller $controller;
    private string $action;

    public Request $request;
    public Router $router;
    public View $view;
    public static App $app;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
        $this->view = new View();
        self::$app = $this;
    }

    public function run()
    {
        try 
        {
            $controller = $this->router->getControllerName();
            $this->action = $this->router->getAction();
            $this->params = $this->router->getParams();

            if (file_exists(CONTROLLERS."/$controller.php")) {
                $controller = '\\app\\controllers\\' . $controller;
            } else {
                return $this->router->renderView("error/404", ["msg" => "404 NOT FOUND"]);
                // exit();
            }

            $this->controller = new $controller;

            if (!method_exists($this->controller, $this->action)) {
                return $this->router->renderView("error/404", ["msg" => "404 NOT FOUND"]);
                //exit();
            }

            call_user_func([$this->controller, $this->action], $this->request, ...$this->params);
        } catch (\Exception $e){
            //echo $e->getMessage();
            $this->router->renderView("error/error", ["error" => $e]);
            exit();
        }
    }
}
