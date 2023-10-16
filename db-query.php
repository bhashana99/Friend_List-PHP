<?php

require_once './config.php';

class Query extends Database{

    public function checkUserExist($email){
        $sql = "SELECT email FROM users WHERE email=:email" ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email'=> $email]);
        return true;
        
    }
}



?>