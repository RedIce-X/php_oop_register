<?php require_once("config.php"); ?>
<?php

class Database
{
    protected function connect()
    {
        try {
            $this->connection = $this->connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            return $this->connection;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
