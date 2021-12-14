<?php
namespace app\core;

use Exception;

class Request
{
    private $url;

    public function __construct()
    {   
        $this->url = strtolower($_SERVER["REQUEST_URI"]);
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getMethod()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    public function get(string $key)
    {
        $body = $this->getBody();

        if(!isset($body[$key]))
        {
            return throw new Exception("Error \"$key\" not found in REQUEST data");
        }

        return $body[$key];
    }

    private function getBody(): array
    {
        if($this->getMethod() == "post")
        {
            $this->body = $_POST;
        }
        elseif($this->getMethod() == "get")
        {
            $array_url = explode("/", trim($this->getUrl(), "/"));
            $this->body = isset($array_url[3]) ? array_slice($array_url, 3) : [];
        }
        return $this->body;
    }
}
