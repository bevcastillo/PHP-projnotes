<?php $page = 'home'; require_once 'homeheader.php'; ?>
<?php session_start(); ?>


<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Leafnote | Homepage</title>
  
</head>
<body>
  <?php require_once 'process.php';?>

  <?php
    $mysqli = new mysqli('127.0.0.1','root','password','leafnotedb') or die(mysqli_error($mysqli));
  ?>

  <div class="row justify-content-center">
      <h3 class="mt-4">Welcome, <?php echo $_SESSION['username'];?></h3>
  </div>

 

</body> 
</html>