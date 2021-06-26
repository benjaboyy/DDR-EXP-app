<?php 
    define("PAGECOLOR","dark");  
    $home = True;
    include 'include/header.php';

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
            <h5 class="card-title">Scan the QR-code</h5>
            <p class="card-text"><video width="100%" id="preview"></video></p>
            <a href="user.php" class="btn btn-primary">Go Back</a>
          </div>
        </div>
        
        <script type="text/javascript">
          let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
          scanner.addListener('scan', function (content) {
            window.location.href = (content);
          });
          Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
              scanner.start(cameras[1]);
            } else {
              console.error('No cameras found.');
            }
          }).catch(function (e) {
            console.error(e);
          });
        </script>
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