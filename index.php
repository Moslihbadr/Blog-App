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
    <title>Blog App</title>
  </head>
  <body>
  <br><br>
    <div class="container mt-5">
      
    <?php

      $query = "SELECT * FROM blogs;";
      $result = mysqli_query($conn, $query);
      $result_check = mysqli_num_rows($result);

      if ($result_check > 0) {
        while($row = mysqli_fetch_assoc($result)){
          echo $row['blog_Title'];
        }
      }

    ?>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php include("./php/footer.php");?>

    <script src="../Blog/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>
</html>