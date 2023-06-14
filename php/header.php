<?php 

if (!(session_status() === PHP_SESSION_ACTIVE)) {
  session_start();
}

?>

<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md">
  <div class="container">
    <a class="navbar-brand" href="index.php">Blog App</a>
    <button class="navbar-toggler navbar-toggler-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end bg-dark text-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">BM Blog</h5>
        <button type="button" class="btn text-light" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-md-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../Blog/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Blog/new_blog.php">New Blog</a>
          </li>
          <?php if (isset($_SESSION['login'])){ ?>
          <li class="nav-item">
            <a href="./php/logout.php" class="nav-link" title="logout"><i class="fa-solid fa-right-from-bracket"></i></a>
          </li>
          <?php } else {?>
          <li class="nav-item">
            <a class="nav-link" href="../Blog/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Blog/signup.php">Sign up</a>
          </li>
          <?php }; ?>
        </ul>
      </div>
    </div>
  </div>
</nav>
