<?php include("./php/connect_DB.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="../Blog/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../Blog/css/style.css?"/>
    <title>Blog App</title>
  </head>
  <body>
    <?php include("./php/header.php");?>
  <br><br>
    <div class="container mt-5">
      <div class="h3">All Blogs</div>
    <?php

  function format_title(string $title) {
    $formatted_title = str_replace(' ', '-', trim($title));
    return $formatted_title;
  }


      $query = "SELECT * FROM blogs;";
      $result = mysqli_query($conn, $query);
      $result_check = mysqli_num_rows($result);

      if ($result_check > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<section class="my-4 ps-4 py-1 border-start border-danger" style="border-width: 5px!important;">
                  <div class="h5 text-succes-hover" style="cursor: pointer;">
                    <a class="text-decoration-none text-dark" href="blog_details.php?blog_title=' . format_title($row['blog_Title']) . '&id=' . $row['blog_ID'] . '">' . $row['blog_Title'] . '</a>
                    <span class="h6 mx-1 text-secondary text-opacity-75">by ' . $row['blog_Writer'] . '</span>
                  </div>
                  <div class="h6 text-secondary">' . $row['blog_Body'] . '</div>
                  <div class="text-muted small">' . $row['blog_DOC'] . '</div>
                </section>';
        }
      }

?>

</div>
  <style>
    .text-succes-hover:hover {
      color: brown;
    }
  </style>

    <?php include("./php/footer.php");?>

    <script src="../Blog/js/bootstrap.min.js"></script>
</body>
</html>
