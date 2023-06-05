<?php
session_start();
// if ($_SESSION['login']) {
//   $_SESSION['login'] = false;
  session_unset();
  session_destroy();
  header("location: ../index.php");
// }