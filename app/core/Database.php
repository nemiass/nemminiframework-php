<?php

namespace app\core;

use const config\DB_CHAR;
use const config\DSN;
use const config\PASSWORD;
use const config\USER;

// BASE DE DATOS USANDO EL PATRON SINGLETON

class Database
{
    private static $instance;
    private $db = null;

    public function __construct()
    {
    }

    public static function getInstance(): Database
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(): \PDO
    {
        if (is_null($this->db)) {
            try {
                $this->db = new \PDO(DSN, USER, PASSWORD, [DB_CHAR]);
                $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $this->db;
    }
}
