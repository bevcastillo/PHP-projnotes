<?php $page='profile'; require 'homeheader.php';?>
<?php session_start(); ?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Leafnote | Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
<?php require_once 'process.php';?>
<?php
    $username = $_SESSION['username'];
    $mysqli = new mysqli('127.0.0.1','root','password','leafnotedb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM usertbl WHERE username='$username'")  or die($mysqli->error);

    while($row = mysqli_fetch_array($result)){
      $lastname = $row['lastname'];
      $firstname = $row['firstname'];
      $username = $row['username'];
      $email = $row['email'];
      $passw = $row['passw'];  
    }?>
    <?php
    if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>

<div class="row-justify-content-center mt-5">
  <div class="col-lg-6 m-auto">
    <div class="card border-success text-center m-auto" style="width: 30rem";>
      <h5 class="card-header">My Profile</h5>
      
      <?php
        if(isset($_SESSION['message'])): ?>
          <div class="alert alert-<?=$_SESSION['msg_type']?>">
          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
          ?>
          </div>
      <?php endif ?>

      <div class="card-body">
      <form action="process.php" method="POST">
        <div class="form-group row">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          
          <label class="col-sm-5 col-form-label mt-2">Lastname</label>
          <div class="col-sm-6">
            <input type="text" class="form-control mt-2" id="lastname" value="<?php echo $lastname; ?>">
          </div>
    
          <label class="col-sm-5 col-form-label mt-2">Firstname</label>
          <div class="col-sm-6">
            <input type="text" class="form-control mt-2" id="firstname" value="<?php echo $firstname; ?>">
          </div>
    
          <label class="col-sm-5 col-form-label mt-2">Username</label>
            <div class="col-sm-6">
              <input type="text" class="form-control mt-2" id="username" value="<?php echo $username; ?>">
            </div>
    
          <label class="col-sm-5 col-form-label mt-2">Email Address</label>
            <div class="col-sm-6">
              <input type="text" class="form-control mt-2" id="email" value="<?php echo $email; ?>">
            </div>
    
          <label class="col-sm-5 col-form-label mt-2">Password</label>
            <div class="col-sm-6">
              <input type="text" class="form-control mt-2" id="passw" value="<?php echo $passw; ?>">
            </div>
    
          <div class="col-sm-5 col-form-label mt-2">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <button type="submit" class="btn btn-danger" name="save">Save</button>
          </div>
  </div>
</form>
      </div>
    </div>
  </div>
</div>  

</body>
</html>