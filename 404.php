<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="../Blog/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="../Blog/css/style.css?"/>
  <title>Page Not Found</title>
</head>
<body>
  <?php include('php/header.php') ?>
  <br><br>
  <div class="d-flex align-items-center justify-content-center vh-100 my-4">
    <div class="text-center">
      <h1 class="display-1 fw-bold">404</h1>
      <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
      <p class="lead">
        The page you’re looking for doesn’t exist.
      </p>
      <a href="index.php" class="btn btn-success">Go Home</a>
    </div>
  </div>

  <?php include('php/footer.php') ?>

  <script src="../Blog/js/jquery.min.js"></script>
  <script src="../Blog/js/script.js"></script>
  <script src="../Blog/js/bootstrap.min.js"></script>
</body>
</html>