<?php

namespace app\models;

use app\core\Database;

class Home
{
    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->conn = $this->db->getConnection();
    }

    public function all()
    {
        $query = "SELECT * FROM usuarios";
        return $this->conn->query($query)->fetchAll(\PDO::FETCH_OBJ);
    }
}
