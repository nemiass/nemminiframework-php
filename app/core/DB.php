<?php

namespace app\core;

use stdClass;

class DB
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = (new Database)->connect();
    }

    public function all(string $table): array|bool
    {
        $query = "SELECT * FROM $table";
        return $this->pdo->query($query)->fetchAll(\PDO::FETCH_OBJ);
    }

    public function find(string $table, string $column, string|int $target): object|bool
    {
        $sql = "SELECT * FROM $table
        WHERE $column=:target";

        $stm = $this->pdo->prepare($sql);
        $stm->execute([":target" => $target]);
        return $stm->fetchObject();
    }
}
