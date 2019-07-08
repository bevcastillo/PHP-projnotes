<?php session_start(); ?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="Bootstrap/custom.css" >
  <link rel="stylesheet" href="Bootstrap/custom-styles.css" >

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
</head>
<body>
<?php require_once 'process.php'; ?>  
<?php
    $username = $_SESSION['username'];
?>
<nav class="navbar navbar-expand-lg navbar-dark" style=" background-color: #93DB70;">
  <a class="navbar-brand" href="home.php">Leafnote</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item <?php if($page=='home'){ echo 'active';}?> ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">
        </span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php if($page=='notes'){ echo 'active';}?>" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Notes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item <?php if($page=='notes'){ echo 'active';}?> "" href="notes.php">Create a note</a>
          <a class="dropdown-item" href="#">Update a note</a>
          <a class="dropdown-item" href="#">Delete a note</a>
          <a class="dropdown-item" href="viewallnotes.php">All Notes</a>
        </div>
      </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle <?php if($page=='profile'){ echo 'active';}?>" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account  
      </a>
      <div class="dropdown-menu" arial-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item <?php if($page=='profile'){ echo 'active';}?> " href="profile.php?username=<?php echo $username;?>">My Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="index.php">Logout</a>
      </div>
      </li>
    </ul>
  </div>
</nav>
  
</body>
</html>