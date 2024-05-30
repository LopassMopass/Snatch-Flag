    <?php
      session_start();
      $request = $_SERVER['REQUEST_URI'];

      switch ($request) 
      {
          case '':
          case '/':
            $redirect = '/index.php';
            break;
          case '/index':
            $redirect = '/index.php';
            break;    
          case '/login':
            $redirect = '/index.php';
            break;
          case '/home':
            $redirect = '/index.php';
            break;    
          case '/about':
            $redirect = '/about.php';
            break;
          case '/policy':
            $redirect = '/policy.php';
            break; 
          case '/index.php':
            $redirect = '/index.php';
            break;    
          case '/login.php':
            $redirect = '/index.php';
            break;
          case '/home.php':
            $redirect = '/index.php';
            break;    
          case '/about.php':
            $redirect = '/about.php';
            break;
          case '/policy.php':
            $redirect = '/policy.php';
            break;            
          default:
            require __DIR__ . '/error.php';
            exit();       
      }
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </head>  
    <header class="p-3 text-dark bg-black bg-gradient">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-lg-start">
          <ul class="nav nav-underline col-4 col-lg-auto me-lg-auto mb-md-0">
            <li class="nav-item">
              <a href="./index.php" class="nav-link px-2 text-body-secondary">
                <img src="./components/GameIcon.png" class="img-fluid" alt="GameIcon" width="32" height="32"></img>
              </a>
            </li>  
            <li class="nav-item">
              <a href="#About" class="nav-link px-2 text-white" aria-disabled="true">About</a>
            </li>
            <li class="nav-item">
              <a href="#Game" class="nav-link px-2 text-white" aria-disabled="true">Game</a>
            </li>
            <li class="nav-item">
              <a href="#Community" class="nav-link px-2 text-white" aria-disabled="true">Community</a>
            </li>
            <li class="nav-item">
              <a href="./error.php" class="nav-link px-2 text-white" aria-disabled="true">DLC</a>
            </li>
          </ul>
  
          <div class="text-end">
            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign-Up</button>
            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#logInModal">Log-In</button>
          </div>
        </div>
      </div> 

      <div class="modal fade bg-dark" id="signUpModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-dark" id="modalLabel">Sign-up</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <form method="post" action="./logic/login.php">
                <div>
                  <div>
                    <div class="col-form-label">
                      <label for="firstFormControlInput" class="col-form-label text-dark">Email address</label>
                    </div>
                    
                    <div>
                      <input type="email" name="email" class="form-control" id="firstFormControlInput" placeholder="Your@email.com">
                    </div>
                  </div>
                  
                  <div>
                    <div class="col-form-label">
                      <label for="firstInputPassword" class="col-form-label text-dark">Password</label>
                    </div>
                    
                    <div>
                      <input type="password" name="password" id="firstInputPassword" class="form-control" aria-describedby="passwordHelpInline" placeholder="Password">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-dark">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade bg-dark" id="logInModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-dark" id="modalLabel">Log-In</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <form method="post" action="./logic/register.php">
                <div>
                  <div>
                    <div class="col-form-label">
                      <label for="firstFormControlInput" class="col-form-label text-dark">Email address</label>
                    </div>
                    
                    <div>
                      <input type="email" name="email" class="form-control" id="firstFormControlInput" placeholder="Your@email.com">
                    </div>
                  </div>
                  
                  <div>
                    <div class="col-form-label">
                      <label for="firstInputPassword" class="col-form-label text-dark">Password</label>
                    </div>
                    
                    <div>
                      <input type="password" name="password" id="firstInputPassword" class="form-control" aria-describedby="passwordHelpInline" placeholder="Password">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-dark">Confirm</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <body class="bg-secondary bg-gradient bg-opacity-75">
      <div id="Game" class="container-sm text-start">
        <p class="fs-1"><b>A trilling melee action PvP game</b></p>
        <p class="fs-2">Set admist the chaos of a fantasy medival world war</p>
        <p class="fs-6">Fight for your life and your future of your country in <b>Snatch&Flag</b> going throught countless wars with your friends.</p>
      </div>
        
      <div class="d-flex justify-content-center py-3">
        <div id="imageCarousel" class="carousel slide" style="width: 800px">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./components/Placeholder_Black.png" class="d-block w-100 h-100" alt="Movement">
              <div class="carousel-caption d-none d-md-block">
                <h5>A slick movement tha feels fluent</h5>
                <p>Feel the way of movemnet through the ruins of war.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./components/Placeholder_Black.png" class="d-block w-100 h-100" alt="Combat">
              <div class="carousel-caption d-none d-md-block">
                <h5>A niche way of combat</h5>
                <p>Trie the way of old school combat with pixel art style</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./components/Placeholder_Black.png" class="d-block w-100 h-100" alt="Objective">
              <div class="carousel-caption d-none d-md-block">
                <h5>Snatch a flag and be done with you pilgrim</h5>
                <p>Through your wisdom, fighting spirit and deciding movement get to the enemy flag and steal their continent</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>      
      </div>

      <div class="d-flex justify-content-center py-4">
        <a class="btn btn-dark btn-lg" href="./error.php" role="button"><b>DOWNLOAD ↓</b></a>
      </div>
      
      <div id="Community" class="container py-2">
      <p class="fs-2 text-center"><b>Social Communities</b></p>
        <ul class="nav justify-content-center pb-3 mb-3">
          <li class="nav-item">
            <a href="https://youtu.be/uCfXfweVH34" class="nav-link px-2 text-body-secondary">
              <img src="./components/YouTube_Icont.png" class="img-fluid py-2" alt="YouTube" width="48" height="48"></img>
            </a>
          </li>  
          <li class="nav-item">  
            <a href="https://x.com/asmongold" class="nav-link px-2 text-body-secondary">
              <img src="./components/X_Icon.png" class="img-fluid" alt="Twitter" width="48" height="48"></img>
            </a>
          </li>
          <li class="nav-item">  
            <a href="https://discord.gg/jWWXsHjQ" class="nav-link px-2 text-body-secondary">
              <img src="./components/Discord_Black_Icon.png" class="img-fluid" alt="Discord" width="48" height="48"></img>
            </a>
          </li>  
          <li class="nav-item">  
            <a href="https://www.reddit.com/r/wehatedougdoug/" class="nav-link px-2 text-body-secondary">
              <img src="./components/Reddit_Icon.png" class="img-fluid" alt="Reddit" width="48" height="48"></img>
            </a>
          </li>
        </ul>
      </div>
    </body>
    
    <footer>
      <div id="About"class="container">
        <p class="fs-2 text-center"><b>Media</b></p>
        <div class="d-flex justify-content-center">
          <div id="videoCarousel" class="carousel slide" style="width: 800px">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./components/Placeholder_Black.png" class="d-block w-100 h-100" alt="Movement">
                <div class="carousel-caption d-none d-md-block">
                  <h5>A slick movement tha feels fluent</h5>
                  <p>Feel the way of movemnet through the ruins of war.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./components/Placeholder_Black.png" class="d-block w-100 h-100" alt="Combat">
                <div class="carousel-caption d-none d-md-block">
                  <h5>A niche way of combat</h5>
                  <p>Trie the way of old school combat with pixel art style</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./components/Placeholder_Black.png" class="d-block w-100 h-100" alt="Objective">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Snatch a flag and be done with you pilgrim</h5>
                  <p>Through your wisdom, fighting spirit and deciding movement get to the enemy flag and steal their continent</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>      
        </div>
        
        <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
        
        <ul class="nav nav-underline justify-content-center">
          <a href="./policy.php" class="nav-link text-body-secondary">
            <p class="text-center text-body-secondary">Privacy policy</p>
          </a>
          <a href="./error.php" class="nav-link text-body-secondary">
            <p class="text-center text-body-secondary">Cookies</p>
          </a>
        </ul>
      </div>
    </footer>
</html>