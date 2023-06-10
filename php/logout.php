<?php
setcookie('login_user_id', '', time() - 86400, '/website/Blog', 'localhost');

session_start();
session_unset();
session_destroy();
header("location: ../index.php");
