<?php

// defining Variables
$servername = "localhost";
$username = "root";
$password = "";
$title = "PHP Wordpress Theme Challenge";
$message = "";
$class = "";

// Create connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=php_challenge", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage() .". Please create php_challenge database";
  exit();
}
?>