<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="../Blog/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="../Blog/css/style.css?<?php rand(1,9) ?>"/>
  <title>New Blog</title>
</head>
<body>
<?php 

include("./php/header.php");
include("./php/connect_DB.php");

// session_start();
if (!$_SESSION['login']) {
  header('Location: login.php');
}

?>
<br><br>
  <div class="container d-flex justify-content-center flex-column mt-5 w-100" id="form-container">
    <div class="h1 mt-2  text-center">Start blogging today</div>
    <div class="h6 text-center mb-4">Share your ideas with the world!</div>
      <form class="mt-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="add_blog" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Your Name :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="blog_writer" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Blog Title :</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="blog_title" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Blog Body :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="1000" rows="3" name="blog_body" required></textarea>
      </div>
      <input type="submit" value="Submit" class="btn btn-outline-success">
    </form>
  </div> 

  <?php include("./php/footer.php");?>

  <script src="../Blog/js/bootstrap.min.js"></script>
  <script src="../Blog/js/jquery.min.js"></script>
  <script src="../Blog/js/script.js"></script>
</body>
</html>
<?php 
// date and time format
function blog_DOC() {
  $currentDateTime = date("Y-m-d H:i:s");
  $formattedDateTime = "Posted on " . date("Y-m-d") . " at " . date("h:i A", strtotime($currentDateTime));
  return $formattedDateTime;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $blog_writer = $_POST['blog_writer'];
  $blog_title = $_POST['blog_title'];
  $blog_body = $_POST['blog_body'];
  
  if (!empty($blog_body) && !empty($blog_title) && !empty($blog_writer)) {
    
    // Prepare the query with form data
    $query = "INSERT INTO blogs (blog_Writer, blog_Title, blog_Body, blog_DOC, user_id) VALUES ('$blog_writer', '$blog_title', '$blog_body', '".blog_DOC()."', '".$_COOKIE['login_user_id']."');";

    // Execute the query
    $result = mysqli_query($conn, $query);

    echo "<script> $('#form-container').before(`<div class='mt-2 alert alert-success alert-dismissible fade show text-center' role='alert'><strong>Blog successfully Added.</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>`)</script>";
  
  }
  else {
    echo "<script> $('#form-container').before(`<div class='mt-2 alert alert-danger alert-dismissible fade show text-center' role='alert'><strong>Please Fill All Inputs.</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>`)</script>";
  }
}


?>
