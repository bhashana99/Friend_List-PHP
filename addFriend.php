<?php 
session_start();
require_once './header.php'; 
require_once './db-query.php';

$query1 = new Query();

$numOfFriend = $_SESSION['userNof'];
$username = $_SESSION['username'];



?>


<div class="container mt-5 col-8">
<h2 class="mt-5 text-center"><span class="text-warning"><?php echo $username; ?></span> 's Add Friend Page</h2>
<h3 class="mt-2 text-center"> Total Number of Friends is <span class="text-success"><?php echo $numOfFriend; ?></span> </h3>

<?php
$output = '';
$data = $query1->fetchAllUsers($username);
$output .= '<table class="table table-striped table-bordered text-center mt-4">
    <tbody>';
    foreach($data as $user){    

          $output .= ' <tr>
                <th >'.$user['username'].'</th>
                <th><button name="addFriend" class="btn btn-primary" id="'.$user['id'].'">Add as friend</button></th>
                    
            </tr>';
        }
        $output .= '</tbody>
        <tbody>
    </table>';

    echo $output;
?>
</div>