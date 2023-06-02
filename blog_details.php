<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../Blog/css/style.css">
  <title><?php echo'Blog | '. str_replace('-', ' ', trim($_GET['blog_title'])); ?></title>
</head>
<body>
  <?php include("./php/header.php")?>
  <br><br><br>
  <div class="container mt-5">
    <div class="d-flex justify-content-between px-1">
      <div class="h3">Blog Title</div>
      <i class="fa fa-trash text-danger me-2" style="cursor: pointer;"></i>
    </div>
    <div class="p-2">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nam eum ipsum consectetur, dolorem animi nulla, enim ratione iusto temporibus inventore officia beatae necessitatibus deleniti accusantium eos ipsam nobis provident.
    </div>
  </div>
  
  <?php include("./php/footer.php");?>

<script src="../Blog/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>
</html>