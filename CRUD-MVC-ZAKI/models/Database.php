<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "Zaki0505!";
    private $dbname = "crud-mvc-zaki";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>