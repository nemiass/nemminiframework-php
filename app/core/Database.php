<?php

namespace app\core;

use const config\DSN;
use const config\PASSWORD;
use const config\USER;

class Database
{
    public \PDO|null $pdo;

    public function __construct()
    {
        $this-> pdo = null;
    }

    public function connect(): \PDO
    {
        try {
            $this->pdo = new \PDO(DSN, USER, PASSWORD);

            $this->pdo->setAttribute(
                \PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION
            );
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $this->pdo;
    }

    public function close()
    {
        $this->pdo = null;
    }

    public function __destruct()
    {
        $this->close();
    }
}
