<?php 
    $message = "Nothing";
    define("PAGECOLOR","dark");  
    $home = True;
    include 'include/header.php';
    include 'include/send_night.php';

    if($_SESSION['is_active'] == '1') { 
    ?>
        <h3></h3><br>
        <div class="card text-center">
          <div class="card-body">
<!--
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Alert: </strong><?php echo $message; ?>
                </div>
-->
            <h5 class="card-title"><?php echo $message; ?></h5>
            <p class="card-text">Visited <?php echo $_SESSION['night_visits']; ?> before</p>
            <a href="index.php" class="btn btn-primary">Go Back</a>
          </div>
          <div class="card-footer text-muted">
            Added one visit to your list
          </div>
        </div>
    <?php
    } else {
      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Alert:</strong> You have to login for this function. <?php echo $message; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
    }
    include 'include/footer.php';
?>