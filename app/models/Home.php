<?php

namespace app\models;

use app\core\DB;

class Home
{
    public function __construct()
    {
    }

    public function all()
    {
        return DB::all("usuarios");
    }
}
