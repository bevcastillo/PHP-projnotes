<?php require_once 'indexheader.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Leafnote | Register</title>
    <link rel="stylesheet" type="text/css" href="styles.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-6 m-auto">
      <div class="card bg-white mt-5">
        <div class="row">
          <div class="col-4 my-auto mx-auto" style="padding-left: 50px;"> <img src="images/question.png" class="img-fluid"></div>
          <div class="col-8 mx-auto my-auto">
            <div class="card-title text-black">
              <h5 class="text-center py-2 font-weight-bold mb-0 mt-3">Register</h5>
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
                <input type="text" name="lastname" placeholder="Lastname" class="form-control mb-2" required autofocus>
                <input type="text" name="firstname" placeholder="Firstname" class="form-control mb-2" required autofocus>
                <input type="text" name="username" placeholder="Username" class="form-control mb-2" required autofocus>
                <input type="text" name="email" placeholder="Email address" class="form-control mb-2" required autofocus>
                <input type="text" name="passw" placeholder="Password" class="form-control mb-2" required autofocus>
                <button class="btn btn-danger btn-block mt-3" name="signup" class="pt-3">Register</button>

                <div class="text-center mt-3 mb-3" style="font-size: 14px;">Already have an account?
                  <a href="login.php" class="alert-link">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>