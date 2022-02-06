<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Database;
use app\core\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $db = Database::getInstance();
    }

    public function usuarios(Request $request)
    {
        $db = Database::getInstance();
        $db->getConnection();
        $db->getConnection();
    }
}
