<?php

namespace app\core;

class DB
{
    public function __construct()
    {
        $this->db = new Database();
    }
    public static function all(string $table)
    {
        $database = new Database;
        $db = $database->getConnection();

        $query = "SELECT * FROM $table";
        return $db->query($query)->fetchAll(\PDO::FETCH_OBJ);
    }

    public static function find(string $table, string $column, $target)
    {
        //$database = new Database;
        $conn = self::$this->db->getConnection();

        $query = "SELECT * FROM $table
        WHERE :column=:target";

        // $stmm = 
        
    }
}
