<?php

session_start();
require_once './header.php'; 

$numOfFriend = $_SESSION['userNof'];
$username = $_SESSION['username'];

?>

<div class="container">
<h2 class="mt-5 text-center"><span class="text-warning"><?php echo $username; ?></span> 's Add Friend Page</h2>
<h3 class="mt-2 text-center"> Total Number of Friends is <span class="text-success"><?php echo $numOfFriend; ?></span> </h3>
</div>
