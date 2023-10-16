<?php

class Database{

    // const USERNAME = 'bhashanachamodya99@gmail.com';
    // const PASSWORD = 'fkoctjkkbsjwhicu';

     //$dsn = data source network
     private $dsn = "mysql:host=localhost;port=3307;dbname=my_friend";
     private $dbuser = "root";
     private $dbpass = "";
     
     public $conn;
 
     public function __construct(){
         try{
             $this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);
 
             //echo 'Connected Successfully to the database!';
 
         }catch (PDOException $e){
             echo 'Error: '.$e->getMessage();
         }
 
         return $this->conn;
     }

    }


?>