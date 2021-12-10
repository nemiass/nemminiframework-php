<?php

namespace app\core;

// Patron singleton para mi archivo que maneja las configuraciones
class Config
{
    private $vars;
    private static $instance;

    public function __construct()
    {
        $this->vars = array();
    }

    public function set(string $name, $value)
    {
        if(!isset($this->vars[$name]))
        {
            $this->vars[$name] = $value;
        }
    }

    public function get(string $name): string
    {
        if(isset($this->vars[$name]))
        {
            return $this->vars[$name];
        }
    }

    public static function getInstance(): self
    {
        if(!isset(self::$instance))
        {
            $class = __CLASS__;
            self::$instance = new $class();
        }
        return self::$instance;
    }

}