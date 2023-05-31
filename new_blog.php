<?php include("./php/connect_DB.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../Blog/css/style.css">
  <title>New Blog</title>
</head>
<body>
<?php include("./php/header.php");?>
<br><br>
  <div class="container d-flex justify-content-center flex-column my-5 w-50 w-md-100">
      <form action="">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Your Name :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Blog Title :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Blog Body :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <input type="submit" value="Submit" class="btn btn-outline-success">
    </form>
  </div> 

  <?php include("./php/footer.php");?>

  <script src="../Blog/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>
</html>
