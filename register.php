
<?php 
session_start();
require_once './header.php'; 

$msg = $_SESSION['msg'];
$sEmail=$_SESSION['email'];
$sUsername=$_SESSION['username'];
$spass1=$_SESSION['pass1'];
$spass2=$_SESSION['pass2'];
?>


<div class="container">
    <h2 class="mt-5 text-center text-success">Registration </h2>
    <div class="col-md-4 mt-5 mx-auto" class="text-center">    
        <div id="form-error">
            <p class="text-danger"><?php echo $msg; ?></p>
        </div>
        <form method="post" action="./action.php">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required  value="<?php echo $sEmail; ?>">
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="profile name" required value="<?php echo $sUsername; ?>" >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"  required value="<?php echo $spass1; ?>">
            </div>
            
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required value="<?php echo $spass2; ?>">
            </div>

            <div class="d-flex justify-content-end mb-3">
                <a href="./login.php" style="text-decoration: none;">I already have an account.</a>
            </div>

            <div class="mb-3 text-center ">
               <button class="btn btn-success col-12 mb-2" name="register" value="Register">Register</button>
                 <a href="./index.php" class=" text-secondary" >Back to home page</a>
            </div>
        </form>
    </div>
</div>