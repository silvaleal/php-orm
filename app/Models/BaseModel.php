<?php

namespace App\Models;

use App\Database\Database;
use PDO;

class BaseModel
{
    protected $table;

    public $query = "";
    private $pdo;

    public function __construct(Database $pdo)
    {
        $this->pdo = $pdo->connect();
    }

    public function insert(array $arr)
    {
        $ids = join(', ', array_keys($arr));
        $values = join(", ", $arr);

        $this->query .= "INSERT INTO $this->table ($ids) VALUES ($values)";
        return $this;
    }

    public function select()
    {
        $this->query .= "SELECT * FROM $this->table";
        return $this;
    }

    public function where($column, $value)
    {
        $this->query .= " WHERE $this->table.$column = $value";
        return $this;
    }

    public function join($table, $join)
    {
        $this->query .= " INNER JOIN $table ON $join";
        return $this;
    }

    public function first()
    {
        $stmt = $this->pdo->prepare($this->query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function get()
    {
        $stmt = $this->pdo->prepare($this->query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}