<?php
include('include/login.php');
$grav_url_sm = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $_SESSION['email'] ) ) ) . "&d=" . "404" . "&s=" . 56;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome/css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="manifest" href="manifest.json">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script>
    // Check that service workers are supported
    if ('serviceWorker' in navigator) {
      // Use the window load event to keep the page load performant
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('service-worker.js');
      });
    }
    </script>  
    <title>DDR-EXP APP</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-<?php echo PAGECOLOR; ?>">
      <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <?php
                    if ($home == TRUE) {
                        echo "DDR-EXP";
                    } else {
                        echo "<i class=\"bi bi-arrow-left-short\"></i> Back";
                    }   
                ?>
            </a>
          <?php
          if($_SESSION['is_active'] == '1') { ?>
              <form class="form-inline my-2 my-lg-0">
                
                <a href="user.php"><img style="height: 38px; margin-right: 8px;" src="<?php echo $grav_url_sm; ?>" class="rounded-circle"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </form>
          <?php
          } else {?>
                <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-light me-2" type="button"  data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </form>
              <?php
          }?> 
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="platforms.php">Platforms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="highscores.php">Highscores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="community.php">Community</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="arcade.php">The Arcade</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quests.php">Quests</a>
              </li>
            </ul>
        </div> 
      </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">

                    <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $verificationRequiredErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email_signin" id="email_signin" />
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password_signin"
                        id="password_signin" />
                </div><br>
                <div class="d-grid gap-2">
                    <button type="submit" name="login" id="sign_in" class="btn btn-dark btn-lg btn-block">Sign
                        in</button>
                </div>
                <div class="d-grid gap-2">
                    <a href="signup.php" class="btn btn--outline-dark btn-lg btn-block">Register</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
       <br><br><br><br>