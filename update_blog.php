<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="../Blog/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../Blog/css/style.css?<?php rand(1, 9) ?>" />
  <title>Update Blog</title>
</head>

<body>
<?php
  include("./php/header.php");
  include("./php/connect_DB.php");

  // Check if user is logged in
  if (!$_SESSION['login'] || !isset($_GET['blog_id'])) {
    header('Location: login.php');
    exit();
  }

  // date and time format
  function blog_DOC() {
    $currentDateTime = date("Y-m-d H:i:s");
    $formattedDateTime = "Updated on " . date("Y-m-d") . " at " . date("h:i A", strtotime($currentDateTime));
    return $formattedDateTime;
  }

  // Get blog id from URL
  $blog_id = $_GET['blog_id'];

  // Fetch existing blog data for update
  $query = "SELECT * FROM blogs WHERE blog_ID = $blog_id";
  $result = mysqli_query($conn, $query);
  $blog = mysqli_fetch_assoc($result);

  // Check if the form is submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blog_writer = $_POST['blog_writer'];
    $blog_title = $_POST['blog_title'];
    $blog_body = $_POST['blog_body'];

    if (!empty($blog_body) && !empty($blog_title) && !empty($blog_writer)) {
      // Prepare the query with form data
      $query = "UPDATE blogs SET blog_Writer='" . mysqli_real_escape_string($conn, $blog_writer) . "', blog_Title='" . mysqli_real_escape_string($conn, $blog_title) . "', blog_Body='" . mysqli_real_escape_string($conn, $blog_body) . "', blog_DOC='" . mysqli_real_escape_string($conn, blog_DOC()) . "', user_id='" . mysqli_real_escape_string($conn, $_COOKIE['login_user_id']) . "' WHERE blog_ID=$blog_id";

      // Execute the query
      $result = mysqli_query($conn, $query);

      if ($result) {
        echo "<div class='mt-2 alert alert-success alert-dismissible fade show text-center' role='alert'>
                <strong>Blog successfully updated.</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
      } else {
        echo "<div class='mt-2 alert alert-danger alert-dismissible fade show text-center' role='alert'>
                <strong>Error updating blog: " . mysqli_error($conn) . "</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
      }
    } else {
      echo "<div class='mt-2 alert alert-danger alert-dismissible fade show text-center' role='alert'>
              <strong>Please fill in all inputs.</strong>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
    }
  }
  ?>
  <br><br>
  <div class="container d-flex justify-content-center flex-column mt-5 w-100" id="form-container">
    <div class="h1 mt-2  text-center">Update Your Blog</div>
    <form class="mt-5" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">New Name :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="blog_writer" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">New Blog Title :</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="blog_title" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">New Blog Body :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="1000" rows="3" name="blog_body" required></textarea>
      </div>
      <input type="submit" value="Update" class="btn btn-outline-success">
    </form>
  </div>

  <?php include("./php/footer.php"); ?>

  <script src="../Blog/js/bootstrap.min.js"></script>
  <script src="../Blog/js/jquery.min.js"></script>
  <script src="../Blog/js/script.js"></script>
</body>

</html>