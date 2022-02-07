<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Database;
use app\core\DB;
use app\core\Request;

use function PHPSTORM_META\map;

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
            "id_usuario" => null,
            "nombre" => "juan",
            "correo" => "dadsa@gmail.com",
            "telefono" => "000000111"
        ];
        $insert =$db->insert("usuarios", $data);

        if ($insert)
        {
            echo "insertado correctamente";
        } else {
            echo "error";
        }
    }
}
