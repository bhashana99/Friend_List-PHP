<?php
require_once './db-query.php';

$query = new Query();

if(isset($_POST['register']) ){
    
// print_r($_POST);
$email = $_POST['email'];
$username = $_POST['username'];
$pass1 = $_POST['password']; 
$pass2 = $_POST['cpassword']; 

if($query->checkUserExist($email)){

}else{
    echo '<script>document.getElementById("form-error").innerHTML =  "<p class="text-danger">Email already exists<p>";</script>';
}



}



?>
