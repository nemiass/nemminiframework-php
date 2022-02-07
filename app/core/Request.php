<?php
namespace app\core;

use Exception;

class Request
{
    private $url;

    public function __construct()
    {
        $this->url = $_GET["url"];
    }

    public function getUrl()
    {
        return trim($this->url, "/");
    }

    public function getMethod()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    public function get(string $key)
    {
        $body = $this->getBody();
        print_r($body);
        exit();

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
            $this->body = isset($array_url[2]) ? array_slice($array_url, 2) : [];
        }
        return $this->body;
    }
}
