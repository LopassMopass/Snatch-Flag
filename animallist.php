<?php
session_start();
if(isset($_GET["logout"])) 
{
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebServerDemo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header class="p-3 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-body-white">Log-In</a></li>
            <li class="nav-item"><a href="./login.php" class="nav-link px-2 text-body-white" disabled>Home</a></li>
            <li class="nav-item"><a href="./animal.php" class="nav-link px-2 text-secondary">Animal List</a></li>
            <li class="nav-item"><a href="./behavier.php" class="nav-link px-2 text-white">Animal Behavier</a></li>
          </ul>
        </div>
      </div> 
    </header>
    <div class="text-end p-3">
        <a href="?logout=true" class="btn btn-danger">Logout</a>
    </div>
    
    <div>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Dog: Hafan</li>
        <li class="list-group-item">Cat: MnouMnou</li>
        <li class="list-group-item">Bird: Aro</li>
      </ol>
    </div>
    
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-body-white">Log-In</a></li>
          <li class="nav-item"><a href="./home.php" class="nav-link px-2 text-body-white" disabled>Home</a></li>
          <li class="nav-item"><a href="./animalist.php" class="nav-link px-2 text-secondary">Animal List</a></li>
          <li class="nav-item"><a href="./behavier.php" class="nav-link px-2 text-white">Animal Behavier</a></li>
        </ul>
        <p class="text-center text-body-secondary">@Hallo!</p>
      </footer>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>