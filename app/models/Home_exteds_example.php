<?php

namespace app\models;

use app\core\Model;

class Home extends Model
{
    public function __construct()
    {
    }

    public function all()
    {
        $query = "SELECT * FROM usuarios";
        return Home::connect()->query($query)->fetchAll(\PDO::FETCH_OBJ);
    }
}
