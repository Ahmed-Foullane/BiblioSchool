<?php
require "/var/www/html/vendor/autoload.php";

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable("/var/www/html");
$dotenv->load();

     $host = $_ENV['host'];
     $dbname = $_ENV['dbname'];
     $user = $_ENV['user'];
     $pass = $_ENV['password'];
     $link;
        try{
            $dsn = "mysql:host=" . $host . ";dbname=" . $dbname;
            $link = new PDO($dsn, $user, $pass);
            if ($link) {
                echo 'connected';
            }
        }catch (PDOException $e){
            echo $e->getMessage();
        }

?>