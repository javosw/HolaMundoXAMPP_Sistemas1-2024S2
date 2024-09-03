<?php
class Database {
    private $host = 'localhost:80';
    private $user = 'root';
    private $password = '';
    private $database = 'equipo-futbol';

    public function getConnection() {
        $hostDB = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";";

        try {
            $connection = new PDO($hostDB, $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            die("ERROR: " . $e->getMessage());
        }
    }
}
