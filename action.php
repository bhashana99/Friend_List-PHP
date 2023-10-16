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
        echo 'done';
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



?>
