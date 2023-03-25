<?php
$mysqli = require __DIR__ . './database.php';

if(isset($_POST['bttn_submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM user WHERE username='$username' and password='$password'";
  $result = $mysqli->query($query);
  $user = $result->fetch_assoc();
  if($user) 
  {
    header("Location:admin.php");
    exit;
  }
  else 
  {
    header("Location:index.php");
    exit;
  }
}



