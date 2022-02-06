<?php

namespace app\core;

use const config\DSN;
use const config\PASSWORD;
use const config\USER;

// DATABASE Singleton, model
class Database
{
    public \PDO $db;

    public function __construct()
    {
    }

    public function getConnection(): \PDO
    {
        try {
            $this->db = new \PDO(DSN, USER, PASSWORD, ["utf-8"]);

            $this->db->setAttribute(
                \PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION
            );
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $this->db;
    }

    public function close()
    {
        $this->db = null;
    }
}
