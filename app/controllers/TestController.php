<?php

namespace app\controllers;

use app\core\Controller;
use app\core\DB;
use app\core\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
    }

    public function usuarios(Request $request)
    {
        $db = new DB();
        var_dump($db->find("usuarios", "id_usuario", 1));
    }

    public function insert()
    {
        $db = new DB();
        $data = [
            "nombre" => "juan",
            "correo" => "dadsa@gmail.com",
            "telefono" => "000000111"
        ];
        $db->insert("usuarios", $data);
    }
}
