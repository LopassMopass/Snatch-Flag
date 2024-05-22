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
            <li class="nav-item"><a href="./home.php" class="nav-link px-2 text-body-secondary" disabled>Home</a></li>
            <li class="nav-item"><a href="./animalist.php" class="nav-link px-2 text-white">Animal List</a></li>
            <li class="nav-item"><a href="./behavier.php" class="nav-link px-2 text-white">Animal Behavier</a></li>
          </ul>
        </div>
      </div> 
    </header>
    <div class="text-end p-3">
        <a href="?logout=true" class="btn btn-danger">Logout</a>
    </div>
    <p class="text-center"><b>Welcome, <?= $_SESSION["email"]?></b></p>
    <div>
      <p class="text-center">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non arcu lacinia neque faucibus fringilla. 
        Etiam posuere lacus quis dolor. Proin in tellus sit amet nibh dignissim sagittis. Fusce suscipit libero eget elit. 
        Sed convallis magna eu sem. In enim a arcu imperdiet malesuada. Etiam quis quam. In dapibus augue non sapien. 
        Donec quis nibh at felis congue commodo. Aliquam erat volutpat. Proin in tellus sit amet nibh dignissim sagittis. 
        Sed ac dolor sit amet purus malesuada congue. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
        aliquip ex ea commodo consequat. Aliquam id dolor. Nullam rhoncus aliquam metus. Nunc auctor. Curabitur vitae diam non enim 
        vestibulum interdum. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Pellentesque arcu.
      </p>
      <p class="text-center">
        Vestibulum fermentum tortor id mi. Nulla non arcu lacinia neque faucibus fringilla. Quisque tincidunt scelerisque libero. 
        Duis viverra diam non justo. Aenean placerat. Donec vitae arcu. Itaque earum rerum hic tenetur a sapiente delectus, 
        ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Vestibulum erat nulla, 
        ullamcorper nec, rutrum non, nonummy ac, erat. Suspendisse sagittis ultrices augue. Fusce aliquam vestibulum ipsum.
      </p>
      <p class="text-center">
        Pellentesque sapien. Maecenas aliquet accumsan leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
        per inceptos hymenaeos. Aliquam ornare wisi eu metus. Pellentesque arcu. Etiam dictum tincidunt diam. Vivamus porttitor turpis ac leo. 
        In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Sed convallis magna eu sem. Integer vulputate sem a nibh rutrum consequat.
      </p>
    </div>
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-body-white">Log-In</a></li>
          <li class="nav-item"><a href="./home.php" class="nav-link px-2 text-body-secondary" disabled>Home</a></li>
          <li class="nav-item"><a href="./animalist.php" class="nav-link px-2 text-white">Animal List</a></li>
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