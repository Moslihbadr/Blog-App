<?php 
include("./php/connect_DB.php");


$errorMessage = "";

if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Query the database for the hashed password
  $query = "SELECT * FROM users WHERE email=?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) > 0) {
    // Verify the hashed password
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['user_id'];
    $hashed_password = $row["password"];
    if (password_verify($password, $hashed_password)) {
      // Start a session
      session_start();
      $_SESSION["email"] = $email;
      $_SESSION["password"] = $password;
      $_SESSION["login"] = true;
      setcookie("login_user_id", $user_id, time() + 86400); // valid for one day 
      
      header('Location: new_blog.php?id=' . $_COOKIE["login_user_id"]);
      exit();
    } else {
      $errorMessage = "Invalid Password, Try again.";
    }
  } else {
    $errorMessage = "Email Not Found";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="../Blog/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="../Blog/css/style.css?"/>
  <title>Login</title>
</head>
<body>
  <?php include("./php/header.php"); ?>
  <br><br><br>
  <div class="container my-4" style="max-width: 400px;">
    <div class="h3 text-center mb-1">Login to Blog App</div>
    <form id="login-form" class="card p-3 mt-3" method="POST">
      <?php if (!empty($errorMessage)): ?>
        <div class="mt-2 alert alert-danger alert-dismissible fade show text-center" role="alert">
          <strong><?php echo $errorMessage; ?></strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php endif; ?>
      <div class="mb-3 form-floating">
        <input type="email" id="login-email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" name="email" required>
        <label for="exampleInputEmail1" class="form-label">Email address</label>
      </div>
      <div class="mb-3 form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password" style="position: relative;" name="password" required>
        <i class="fa-solid fa-eye eye"></i>
        <label for="password" class="form-label">Password</label>
      </div>
      <div class="mb-3 ms-2">
        <div id="emailHelp" class="form-text">Don't have an account? <a href="./sign_up.php">Sign up</a></div>
      </div>
      <button type="submit" name="login" class="btn btn-success">Login</button>
    </form>
  </div>

  <?php include("./php/footer.php");?>

  <script src="../Blog/js/jquery.min.js"></script>
  <script src="../Blog/js/script.js"></script>
  <script src="../Blog/js/bootstrap.min.js"></script>
</body>
</html>
