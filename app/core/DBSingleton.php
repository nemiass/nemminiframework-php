<?php

namespace app\core;

use const config\DSN;
use const config\PASSWORD;
use const config\USER;

// DATABASE Singleto
// No usado en el proyecto: TODO: Es recomendable su uso??
class DBSingleton
{
    private static DBSingleton $instance;
    private \PDO $db;

    public function __construct()
    {
    }

    public static function getInstance(): DBSingleton
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
