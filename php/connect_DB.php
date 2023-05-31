<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB_name = "blog_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $DB_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
