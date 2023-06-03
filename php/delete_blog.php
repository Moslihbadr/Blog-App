<?php
include('./connect_DB.php');

//prepare the query
$query = "DELETE FROM blogs WHERE blog_id = ".$_GET["id"].";"; 

// Execute the query
$exec_query = mysqli_query($conn, $query);

if ($exec_query) {
  header('../Blog/index.php');
}
