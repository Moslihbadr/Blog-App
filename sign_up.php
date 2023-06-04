<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="../Blog/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="../Blog/css/style.css?"/>
  <title>Sign up</title>
</head>
<body>
  <?php include("./php/header.php");?>
  
  <br><br>
  <div class="container my-5" style="max-width: 400px;">
  <div class="h3 text-center mb-1">Sign Up Now</div>
    <form class="card p-3 mt-4" method="POST">
      <div class="mb-3 form-floating">
        <input type="text" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="First Name" name="fname">
        <label for="fname" class="form-label">First Name</label>
      </div>
      <div class="mb-3 form-floating">
        <input type="text" class="form-control" id="lname" aria-describedby="emailHelp" placeholder="Last Name" name="lname">
        <label for="lname" class="form-label">Last Name</label>
      </div>
      <div class="mb-3 form-floating">
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email address" name="email">
        <label for="email" class="form-label">Email address</label>
      </div>
      <div class="mb-3 form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password" style="position: relative;" name="password">
        <i id="eye" class="fa-solid fa-eye"></i>
        <label for="password" class="form-label">Password</label>
      </div>
      <div class="mb-3 form-floating">
        <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" style="position: relative;" name="cpassword">
        <i id="eye" class="fa-solid fa-eye"></i>
        <label for="cpassword" class="form-label">Confirm Password</label>
      </div>
      <div class="mb-3 ms-2">
        <div id="emailHelp" class="form-text">Already have an account? <a href="./login.php">Login</a></div>
      </div>
      <button type="submit" class="btn btn-success">Login</button>
    </form>
  </div>

  <?php include("./php/footer.php");?>

  <script src="../Blog/js/jquery.min.js"></script>
  <script src="../Blog/js/script.js"></script>
  <script src="../Blog/js/bootstrap.min.js"></script>
</body>
</html>