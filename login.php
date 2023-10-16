<?php
session_start();
 require_once './header.php'; 
 
 $msg = $_SESSION['lmsg'];
 ?>


<div class="container">
    <h2 class="mt-5 text-center text-success">Sign in </h2>
    <div class="col-md-4 mt-5 mx-auto" class="text-center">    
        <div id="form-error">
            <p class="text-danger"><?php echo $msg; ?></p>
        </div>
        <form method="post" action="./action.php">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="lemail" name="lemail" placeholder="example@gmail.com" required  >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="lpassword" name="lpassword"  required >
            </div>
            
            <div class="d-flex justify-content-end mb-3">
                <a href="./register.php" style="text-decoration: none;">I haven't an account.</a>
            </div>

            <div class="mb-3 text-center ">
               <button class="btn btn-success col-12 mb-2" name="login" >Login</button>
                 <a href="./index.php" class=" text-secondary" >Back to home page</a>
            </div>
        </form>
    </div>
</div>