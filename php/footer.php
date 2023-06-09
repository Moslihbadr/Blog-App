<?php 
if (!(session_status() === PHP_SESSION_ACTIVE)) {
  session_start();
}
?>

<div class="container-fluid px-0 pt-5">
  <footer class="bg-dark text-center text-white">
  <div class="container p-4 pb-0">
    <section>
    <ul class="nav justify-content-center pb-3 mb-3">
      <li class="nav-item">
        <a href="../Blog/index.php" class="nav-link px-2 text-secondary">Home</a>
      </li>
      <li class="nav-item">
        <a href="../Blog/new_blog.php" class="nav-link px-2 text-secondary">New Blog</a>
      </li>
      <?php if (isset($_SESSION['login'])){ ?>
          <li class="nav-item">
            <a href="./php/logout.php" class="nav-link px-2 text-secondary" title="logout"><i class="fa-solid fa-right-from-bracket"></i></a>
          </li>
          <?php } else {?>
          <li class="nav-item">
            <a class="nav-link px-2 text-secondary" href="../Blog/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2 text-secondary" href="../Blog/signup.php">Sign up</a>
          </li>
      <?php }; ?>
    </ul>
    </section>
    <section class="mb-4">
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Moslihbadr" role="button"
        ><i class="fa-brands fa-github"></i
      ></a>
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/BadrMoslih1" role="button"
        ><i class="fa-brands fa-twitter"></i
      ></a>
      <a class="btn btn-outline-light btn-floating m-1" href="https://web.facebook.com/Moslihbadr01" role="button"
        ><i class="fa-brands fa-facebook"></i
      ></a>
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/moslihbadr01" role="button"
        ><i class="fa-brands fa-instagram"></i
      ></a>
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/moslihbadr" role="button"
        ><i class="fa-brands fa-linkedin-in"></i
      ></a>
    </section>
  </div>

  <div class="text-center p-3 bg-secondary">
    Created By Badr Moslih © 2023
  </div>
</footer>
</div>