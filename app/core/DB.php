<?php

namespace app\core;

class DB
{
    public function __construct()
    {
        
    }
    // public static function all(string $table)
    // {
    //     $database = new Database;
    //     $db = $database->getConnection();

    //     $query = "SELECT * FROM $table";
    //     return $db->query($query)->fetchAll(\PDO::FETCH_OBJ);
    // }
    public static function all(string $table)
    {
        $database = new Database;
        $db = $database->getConnection();

        $query = "SELECT * FROM $table";
        return $db->query($query)->fetchAll(\PDO::FETCH_OBJ);
    }
}
