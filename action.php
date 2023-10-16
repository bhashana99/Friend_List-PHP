<?php
session_start();
require_once './db-query.php';

$query = new Query();

if(isset($_POST['register']) ){
    
// print_r($_POST);
$email = $_POST['email'];
$username = $_POST['username'];
$pass1 = $_POST['password']; 
$pass2 = $_POST['cpassword']; 
// print_r($email);

$_SESSION['email'] = '' ;
    $_SESSION['username'] = '' ;
    $_SESSION['pass1'] = '' ;
    $_SESSION['pass2'] = '' ;

if(!$query->checkUserExist($email)){
    $_SESSION['msg'] = '';
    if(!$query->checkUsernameExist($username)){
        if($pass1 == $pass2){
            $query->saveUser($email,$username,$pass1);
            header('Location: index.php');
            
        }else{
            $_SESSION['msg'] = "* confirm password did not match ";
            header('Location: register.php');
           
        }
    }else{
        $_SESSION['msg'] = "* username already exist";
        header('Location: register.php');
           
    }
       
}else{

    $_SESSION['msg'] = " * email-already exist";
    header('Location: register.php');
}

    $_SESSION['email'] = $email ;
    $_SESSION['username'] = $username ;
    $_SESSION['pass1'] = $pass1 ;
    $_SESSION['pass2'] = $pass2 ;


}

if(isset($_POST['login'])){
    // print_r($_POST);
    $lemail = $_POST['lemail'];
    $lpassword = $_POST['lpassword'];

    $isUser = $query->checkPassword($lemail,$lpassword);

    // print_r($isUser);
   if($isUser != null){
        $_SESSION['userEmail'] = $isUser['email'];
        $_SESSION['userNof'] = $isUser['number_of_friends'];
        $_SESSION['username'] = $isUser['username'];
        // print_r($_SESSION['userEmail']);
        header('Location: home.php');


   }

    

}



?>
