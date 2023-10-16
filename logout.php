<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['userNof']);
header('location:./index.php');

?>
