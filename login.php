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
  <?php include("./php/header.php");?>
  <br><br><br>
  <div class="container my-4" style="max-width: 400px;">
  <div class="h3 text-center mb-1">Login to Blog App</div>
    <form class="card p-3 mt-3" method="POST">
      <div class="mb-3 form-floating">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" name="email">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      </div>
      <div class="mb-3 form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password" style="position: relative;" name="password">
        <i class="fa-solid fa-eye eye"></i>
        <label for="password" class="form-label">Password</label>
      </div>
      <div class="mb-3 ms-2">
        <div id="emailHelp" class="form-text">Don't have an account? <a href="./sign_up.php">sign up</a></div>
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