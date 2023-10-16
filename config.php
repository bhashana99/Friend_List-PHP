<?php

class Database{

    private $dsn = "mysql:host=localhost;port:3307;dbname=my_friend";
    private $dbuser = "root";
    private $pass = "";

    public $conn;

    public function __construct(){
        try{
            $this->conn = new PDO($this->dsn,$this->dbuser,$this->pass);

           echo 'Connected Successfully to the database!';

        }catch (PDOException $e){
            echo 'Error: '.$e->getMessage();
        }

        return $this->conn;
    }
}


?>