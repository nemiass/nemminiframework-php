<?php

namespace app\core;

abstract class Controller
{

    public function render($view, $params=[])
    {
        return App::$app->router->renderView($view, $params);
    }

    abstract public function index(Request $request);
}
