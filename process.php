<?php

//start the session
session_start();

//setting the connection
$mysqli = new mysqli('127.0.0.1','root','password','leafnotedb') or die(mysqli_error($mysqli));

$id = 0;
$lastname="";
$firstname="";
$username="";
$email="";
$passw="";

//check if the login button is pressed
if(isset($_POST['login'])){
  // $id = $_POST['id'];
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $passw = $_POST['passw'];

  $result = $mysqli->query("SELECT * FROM usertbl WHERE username = '".$_POST['username']."' and passw='".$_POST['passw']."' ");

  $row = mysqli_fetch_assoc($result);

  if (count($row) > 0) {
    $_SESSION['id'] = $row["id"];
    $_SESSION['lastname'] = $row["lastname"];
    $_SESSION['firstname'] = $row["firstname"];
    $_SESSION['username'] = $row["username"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['passw'] = $row["passw"];
    
    header("location: home.php");
  } else {
    $_SESSION['message'] = "Username and password is invalid!";
    $_SESSION['msg_type'] = "danger";
    header("location: login.php");
  }
  
}

//check when the signup button is clicked
if(isset($_POST['signup'])){
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $passw = $_POST['passw'];

  $mysqli->query("INSERT INTO usertbl (lastname, firstname, username, email, passw) VALUES 
                ('$lastname','$firstname','$username','$email','$passw')") or die(mysqli_error($mysqli));

  $_SESSION['message'] = "Successfully signed up.";
  $_SESSION['msg_type'] = "success";

  header("location: register.php");
}

//update profile is clicked
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passw = $_POST['passw'];

    $mysqli->query("UPDATE usertbl lastname='$lastname', firstname='$firstname', username='$username', 
                  email='email', passw='passw' WHERE id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = "Profile has been updated!";
    $_SESSION['warning'] = "warning";

    header("location: profile.php");
}

if(isset($_POST['addnotes'])){
  $note_id = $_POST['id'];
  $note_date = $_POST['note_date'];
  $note_text = $_POST['note_text'];
  // $usertbl_id = $_POST['usertbl_id'];
  $user_id = $_SESSION['id'];
  // $mysqli->query("INSERT INTO usernotestbl (note_date, note_text) VALUES
  //               ('$note_date','$note_text')" ("")) or die(mysqli_error($mysqli));
  $mysqli->query("INSERT INTO notestbl (note_date, note_text, user_id) VALUES 
                ('$note_date','$note_text','$user_id')") or die(mysqli_error($mysqli));

  $_SESSION['message'] = "Notes has been successfully added!";
  $_SESSION['warning'] = "warning";
  header("location: notes.php?status=success");
}
?>