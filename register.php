<?php require_once './header.php'; ?>

<div class="container">
    <h2 class="mt-5 text-center text-success">Registration </h2>
    <div class="col-md-4 mt-5 mx-auto" class="text-center">
        <form >
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" >
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="profile name" >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"  >
            </div>
            
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" >
            </div>

            <div class="d-flex justify-content-end mb-3">
                <a href="./login.php" style="text-decoration: none;">I already have an account.</a>
            </div>

        </form>
    </div>
</div>