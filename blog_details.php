<?php 
include('./php/connect_DB.php'); 

// retrieve blog information from URL
$blog_title = $_GET['blog_title'];
$blog_ID = $_GET['id'];

// Prepare the query with form data
$query = 'SELECT * FROM blogs WHERE blog_ID = '.$blog_ID.';';

// Execute the query
$result = mysqli_query($conn, $query);

// get the data about the blog
$row = mysqli_fetch_assoc($result);

// Check if a form was submitted
if (isset($_POST['delete'])) {

  // Get the ID value from the URL
  $id = $_GET['id'];

  $sql = 'DELETE FROM blogs WHERE blog_ID = '.$id.';';
  $exec = mysqli_query($conn, $sql);

  // Redirect the user back to the blog listing page
  header("Location: /website/blog/index.php?blog_deleted=true");  
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
    <link rel="stylesheet" type="text/css" href="../Blog/css/style.css?<?php rand(1,9) ?>"/>
    <title><?php echo'Blog | '. str_replace('-', ' ', trim($blog_title)); ?></title>
  </head>
  <body>
  <?php include("./php/header.php")?>
  <br><br><br>
  <div class="container mt-5">
    <div class="d-flex justify-content-between px-1">
      <div class="description my-3">
        <div class="h3">Title : <?php echo $row['blog_Title'] ?></div>
        <div class="h6">Writer : <?php echo $row['blog_Writer'] ?></div>
        <small class=""><?php echo $row['blog_DOC'] ?></small>
      </div>
      
      <!-- hide the delete button from all users except blog owner and 'admin' users -->
      <?php  
        // initialize the show delete button to false
        $show_delete_button = false;

        // retrieve the blog owner id
        $user_id = $row['user_id'];

        // get the login user id
        if (isset($_COOKIE['login_user_id'])) {
          $login_user_id = $_COOKIE['login_user_id'];
        }else {
          $login_user_id = NULL;
        }
        if ($login_user_id === $user_id) {
          $show_delete_button = true;
        }
        
        // check if the user is an admin
        $user_type = '';
        if (isset($_COOKIE['login_user_id'])) {
          $sql = "SELECT * FROM users WHERE user_id='$login_user_id' ";
          $sql_result = mysqli_query($conn, $sql);
          $user_row = mysqli_fetch_assoc($sql_result);
          $user_type = $user_row['user_type'];
        }
        
        // check if the user is admin
        if ($user_type === 'admin') {
          $show_delete_button = true;
        }

        // display the delete button if the user is the blog owner or the user is an admin
        if ($show_delete_button === true):
      ?>
      <form method="POST">
        <i class="fa fa-trash text-danger me-2 mt-4 fs-md-4" style="cursor: pointer;" for="delete" onclick="document.getElementById('delete').click();">
          <input value="" type="submit" name="delete" id="delete">
        </i>
      </form>
      <?php endif;?>
    </div>
    <div class="ps-2">
      <?php echo $row['blog_Body'] ?>
    </div>
  </div>
  
  <?php include("./php/footer.php");?>

  <script src="../Blog/js/jquery.min.js"></script>
  <script src="../Blog/js/script.js"></script>
  <script src="../Blog/js/bootstrap.min.js"></script>
</body>
</html>