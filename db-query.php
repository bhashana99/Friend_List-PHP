<?php

require_once './config.php';

class Query extends Database{

    public function checkUserExist($email){
        $sql = "SELECT email FROM users WHERE email=:email" ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email'=> $email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
        
    }

    public function saveUser($email,$username,$password){
        $sql = "INSERT INTO users (email,username,password) VALUES (:email,:username,:password)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email'=> $email,'username'=>$username,'password'=>$password]);
        return true;
    }

    public function checkUsernameExist($username){
        $sql = "SELECT username FROM users WHERE username=:username" ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['username'=> $username]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
        
    }
}



?>