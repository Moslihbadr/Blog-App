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
  header("Location: /website/blog/index.php");
  
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
      <div class="h3"><?php echo $row['blog_Title'] ?></div>
      <form method="POST">
        <i class="fa fa-trash text-danger me-2" style="cursor: pointer;" for="delete" onclick="document.getElementById('delete').click();">
          <input class='' type="submit" value="" name="delete" id="delete">
        </i>
      </form>
    </div>
    <div class="p-2">
      <?php echo $row['blog_Body'] ?>
    </div>
  </div>
  
  <?php include("./php/footer.php");?>

  <script src="../Blog/js/jquery.min.js"></script>
  <script src="../Blog/js/script.js"></script>
  <script src="../Blog/js/bootstrap.min.js"></script>
</body>
</html>