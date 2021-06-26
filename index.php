<?php 
    define("PAGECOLOR","dark");  
    $home = True;
    include 'include/header.php';


    if($_SESSION['is_active'] == '1') { 
    ?>
        <h3>Welcome in the Arcade</h3>
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
<!--              <img style="float:right;" src="https://via.placeholder.com/60" alt="...">-->
            <div class="col-12">
              <div class="card-body">
                <h5 class="card-title"><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?> </h5>
                <p class="card-text"><small class="text-muted">User since <?php echo $_SESSION['date_time']; ?></small></p>
                <a class="btn btn-outline-dark" href="user.php" role="button">Profile</a>
                <a class="btn btn-outline-secondary" type="button" href="account.php">Logout</a>
              </div>
            </div>
          </div>
        </div>
    <?php
    } else {
    ?>
        <h2>Welcome in the Arcade</h2>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Alert:</strong> Due to COVID-19 the arcade is currently closed.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
    }
    ?>
<!--    <img src="https://via.placeholder.com/1000x300" class="img-fluid" alt="...">-->
<!--   
        <div class="card mb-3">
          <h5 class="card-header">Reservations</h5>
          <div class="card-body">
            <p class="card-text">Due to COVID-19 the arcade is currently closed.</p>
            <a href="#" class="btn btn-primary btn-disabled" disabled>Make reservation</a>
          </div>
        </div>
-->
       
        <a href="platforms.php" class="custom-card">
            <div class="card text-white bg-dark col-12 mb-3">
              <div class="card-body">
                <h5 class="card-title">Platforms</h5>
                <p class="card-text">Some of the arcades are linked to online profiles, manage your game profiles.</p>
              </div>
            </div>
        </a>
        <a href="highscores.php" class="custom-card">
        <div class="card bg-primary col-12 mb-3">
          <div class="card-body text-light">
            <h5 class="card-title">Highscores</h5>
            <p class="card-text">See or submit local arcade highscores.</p>
          </div>
        </div>
        </a>
        <a href="community.php" class="custom-card">
        <div class="card text-white bg-secondary col-12 mb-3">
          <div class="card-body">
            <h5 class="card-title">Community</h5>
            <p class="card-text">Be part of our community, join one of our social platforms.</p>
          </div>
        </div>
        </a>
        <a href="arcade.php" class="custom-card">
        <div class="card bg-info col-12 mb-3">
          <div class="card-body text-light">
            <h5 class="card-title">The Arcade</h5>
            <p class="card-text">Everything about our arcade, machines, games, location and services</p>
          </div>
        </div>
        </a>
<?php
    include 'include/footer.php';
?>