<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

class DatabaseConnection {
    private $host;
    private $dbname;
    private $user;
    private $pass;
    private $link;

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $this->load();
    }

    private function load() {
        $this->host = $_ENV['host'] ?? null;
        $this->dbname = $_ENV['dbname'] ?? null;
        $this->user = $_ENV['user'] ?? null;
        $this->pass = $_ENV['password'] ?? null;
    }

    public function connect() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
            $this->link = new PDO($dsn, $this->user, $this->pass);
            return $this->link;
            // if ($this->link) {
            //     echo 'Connected';
            // }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

// Usage

?>
