<?php 

namespace App\Database;

use PDO;

class Database {
    public PDO $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=php_orm","root","");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function connect() {
        return $this->pdo;
    }
}