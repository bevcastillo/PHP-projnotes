<?php require_once 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Leafnote | Register</title>
    <link rel="stylesheet" type="text/css" href="styles.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once 'process.php';?>
<div class="container">
    <div class="row">
        <div class="col-lg-4 m-auto">
            <div class="card bg-white mt-3">
                <div class="card-title text-black mt-2">
                    <h4 class="text-center py-2">Register to Leafnote</h4>
                    <?php
                        if(isset($_SESSION['message'])): ?>
                            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                                <?php
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                ?>
                            </div>
                        <?php endif ?>
                </div>
                <div class="card-body">
                    <form action="process.php" method="POST">
                        <input type="hidden" name="id">
                        <input type="text" name="lastname" placeholder="Lastname" class="form-control mb-2" required autofocus>
                        <input type="text" name="firstname" placeholder="Firstname" class="form-control mb-2" required autofocus>
                        <input type="text" name="username" placeholder="Username" class="form-control mb-2" required autofocus>
                        <input type="email" name="email" placeholder="Email Address" class="form-control mb-2" required autofocus>
                        <input type="password" name="passw" placeholder="Password" class="form-control mb2" required autofocus>
                        <p class="text-right" style="font-size: 12px;">
                            <a href="forgotpassword.php">Forgot Password?</a>
                        </p>
                        <button class="btn btn-success btn-block" name="signup" class="pt-2">Register</button>

                        <div class="aler-white border-top mt-3" style="font size: 15px;" role="alert">      
                        Already a member?<a href="login.php" class="alert-link">&nbsp;Login</a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>



</body>
</html>