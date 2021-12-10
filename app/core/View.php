<?php

namespace app\core;

class View
{
    public function renderView($view, $data=[])
    {
        $config = Config::getInstance();

        $file_view = $config->get("APP_ROOT").$config->get("VIEWS_FOLDER").$view.".php";
        if (file_exists($file_view))
        {
            extract($data);
            ob_start();
            require_once($file_view);
            $content = ob_get_clean();
            echo $content;
        } else
        {
            die("Error view '$view' Not Found");
        }
    }
}