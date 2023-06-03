<?php
include('./connect_DB.php');

//prepare the query
$query = "DELETE FROM blogs WHERE blog_id = ".$_GET["id"].";"; 

// Execute the query
$result = mysqli_query($conn, $query);
