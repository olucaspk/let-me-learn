<?php

class Database {
    private $DB_USER = "root";
    private $DB_NAME = "letmelearn";
    private $DB_HOST = "localhost";
    private $DB_PASS = "";

    public $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:dbname=$this->DB_NAME;host=$this->DB_HOST", $this->DB_USER, $this->DB_PASS);
        } catch (PDOException $e) {
            print("Unable to establish database connection ".$e->getMessage());
        } catch (Exception $e) {
            print("Error ".$e->getMessage());
        }
    }

    public function Query($sql, $params = []) {
        $query = $this->pdo->prepare($sql);

        $query->execute($params);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

?>