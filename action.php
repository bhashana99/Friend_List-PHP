<?php

if(isset($_POST['register']) ){
    
// print_r($_POST);
$email = $_POST['email'];
$username = $_POST['username'];
$pass1 = $_POST['password']; 
$pass2 = $_POST['cpassword']; 


if($pass1 == $pass1){
    $hpass = password_hash($pass1,PASSWORD_DEFAULT);

}

}



?>
