<?php

class Database{
    private $conn;
    private static $obj;

    private final function __construct(){
        $path = $_SERVER['DOCUMENT_ROOT'];
        $credentials_file = $path.'/database/db-creds.ini';
        $db_data = parse_ini_file($credentials_file);
        try {
            $this->conn = new PDO("mysql:host=".$db_data['DB_HOST'].":".$db_data['DB_PORT'].";dbname=".$db_data['DB_DATABASE'], $db_data['DB_USER'], $db_data['DB_PASS']);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully to the database";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function getInstance(){
        if(!isset(self::$obj)){
            self::$obj = new Database();
        }
        return self::$obj;
    }

    public function select(string $query, array $params){
        $stmt = $this->executeQuery($query, $params);
        return $stmt;
    }

    public function insert(string $query, array $params){  
        $this->executeQuery($query, $params);
        return $this->conn->lastInsertId();
    }

    private function executeQuery(string $query, array $params){
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
}