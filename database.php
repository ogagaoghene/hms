<?php
$host     = "localhost";
$username = "root";
$password = "";
$dbname   = "hmsdb";

$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli->connect_errno) {
  die("Connection error: " .  mysqli_connect_error);
}

return $mysqli;