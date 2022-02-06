<?php

namespace app\core;

use const config\DB_CHAR;
use const config\DSN;
use const config\PASSWORD;
use const config\USER;

// DATABASE Singleton
class Database
{
    private static Database $instance;
    private \PDO $db;

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
                $this->db = new \PDO(DSN, USER, PASSWORD, ["utf-8"]);

                $this->db->setAttribute(
                    \PDO::ATTR_ERRMODE,
                    \PDO::ERRMODE_EXCEPTION
                );
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $this->db;
    }

    public function close()
    {
        $this->db = null;
    }
}
