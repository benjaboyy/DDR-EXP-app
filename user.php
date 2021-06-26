<?php 
    define("PAGECOLOR","dark"); 
    include 'include/header.php';
    $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $_SESSION['email'] ) ) ) . "&d=" . "404" . "&s=" . 130;
    $achievements = array("fas fa-splotch", "fas fa-stopwatch", "fas fa-pastafarianism", "fas fa-bomb", "fas fa-cloud-moon");
    $stats = array("50", "30", "75", "80");
?>
        <h2 class="text-dark">Profile</h2>
<!--        <img src="https://via.placeholder.com/1000x300" class="img-fluid" alt="...">-->

        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-9">
              <div class="card-body">
                <h5 class="card-title"><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?> </h5>
                <p class="card-text"><?php echo $_SESSION['email']; ?> </p>
                <p class="card-text"><small class="text-muted">User since <?php echo $_SESSION['date_time']; ?> <a class="link-primary" href="account.php">Logout</a></small></p>
                <h3>
                    <?php
                        foreach  ($achievements as &$value) {
                            ?>
                                <i class="<?php echo $value; ?>"></i>
                            <?php
                        }
                    ?>
                </h3>
              </div>
              </div>
             <div class="col-3">
              <img class="float-end rounded" style="margin:16px;" src="<?php echo $grav_url; ?>">
             </div>
          </div>
        </div>
        <div class="row">
        <div class="col-6">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editstats">
                      <i class="fas fa-user-edit"></i> Edit
                </button>
            </div>
        </div>
        <div class="col-6">
            <div class="d-grid gap-2">
<!--                <input style="visibility:hidden;" class="btn btn-secondary text-white" id="file_input" type="file" name="file" accept="image/*" capture="camera">-->
                <a class="btn btn-secondary text-white file_upload" href="qr.php"><i class="fas fa-qrcode"></i> Camera</a>
            </div>                  
        </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Info
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table">
                  <tbody>
                    <tr>
                      <th>Arcadenight Visits</th>
                      <td><?php echo $_SESSION['night_visits']; ?></td>
                    </tr>
                    <tr>
                      <th >Achievements</th>
                      <td>0</td>
                    </tr>
                    <tr>
                      <th >Events</th>
                      <td>0</td>
                    </tr>
                    <tr>
                      <th >Points</th>
                      <td>0</td>
                    </tr>
                  </tbody>
                </table>
               </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapseOne">
                Stats
              </button>
            </h2>
            <?php 
              $iidx_perc = ($_SESSION['iidx']/10)*100; 
              $popn_perc = ($_SESSION['popn']/50)*100; 
              $itg_perc = ($_SESSION['itg']/25)*100; 
              $pump_perc = ($_SESSION['pump']/28)*100; 
              
            ?>
            <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                  <div style="height: 2rem;" class="progress">
                  <div class="progress-bar bg-dark" role="progressbar" style="width: <?php echo $iidx_perc; ?>%; align-items: flex-start; padding-left: 5px;" aria-valuenow="<?php echo $_SESSION['iidx']; ?>" aria-valuemin="0" aria-valuemax="100">IIDX</div>
                </div>
                <div style="height: 2rem;" class="progress">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $popn_perc; ?>%; align-items: flex-start; padding-left: 5px;" aria-valuenow="<?php echo $_SESSION['popn']; ?>" aria-valuemin="0" aria-valuemax="100">POP'n</div>
                </div>
                <div style="height: 2rem;" class="progress">
                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo $itg_perc; ?>%; align-items: flex-start; padding-left: 5px;" aria-valuenow="<?php echo $_SESSION['itg']; ?>" aria-valuemin="0" aria-valuemax="100">ITG</div>
                </div>
                <div style="height: 2rem;" class="progress">
                  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $pump_perc; ?>%; align-items: flex-start; padding-left: 5px;" aria-valuenow="<?php echo $_SESSION['pump']; ?>" aria-valuemin="0" aria-valuemax="100">PUMP</div>
                </div>
                  
               </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Achievements
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="card text-white bg-dark mb-3" >
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col-9">
                        <h5 class="card-title">Marathon</h5>
                        <p class="card-text">Play a song of at least 10 minutes.</p>
                      </div>
                      <div class="col-3">
                        <span style="float:right;"><i style="font-size: 70px;" class="fas fa-stopwatch"></i></span>
                      </div>
                    </div>
                  </div>
                </div>  
                <div class="card bg-light  mb-3" >
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col-9">
                        <h5 class="card-title">Do a Quad<small> Silver</small></h5>
                        <p class="card-text">100% a song on ITG 9 of higher</p>
                      </div>
                      <div class="col-3">
                        <span style="float:right;"><i style="font-size: 70px;" class="fas fa-splotch"></i></span>
                      </div>
                    </div>
                  </div>
                </div>  
                <div class="card text-white bg-dark mb-3" >
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col-9">
                        <h5 class="card-title">Locked in</h5>
                        <p class="card-text">Has visited a lockin event.</p>
                      </div>
                      <div class="col-3">
                        <span style="float:right;"><i style="font-size: 70px;" class="fas fa-cloud-moon"></i></span>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>



<!-- Vertically centered scrollable modal -->
<div id="editstats" tabindex="-1" aria-labelledby="editstats" aria-hidden="true" class="modal modal-fullscreen">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="update" action="send_update.php" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label for="firstname" class="form-label">First name</label>
              <input type="text" class="form-control form-control-lg" id="firstname" name="firstname" value="<?php echo $_SESSION['firstname']; ?>">
            </div>
            <div class="mb-3">
              <label for="lastname" class="form-label">Last name</label>
              <input type="text" class="form-control form-control-lg" id="lastname" name="lastname" value="<?php echo $_SESSION['lastname']; ?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control form-control-lg" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile</label>
              <input type="text" class="form-control form-control-lg" id="mobile" name="mobile" value="<?php echo $_SESSION['mobilenumber']; ?>">
            </div>
              <hr>
            <div class="mb-3">
              <label for="iidx" class="form-label">IIDX level</label>
              <input type="text" class="form-control form-control-lg" id="iidx" name="iidx" placeholder="-">
            </div>
            <div class="mb-3">
              <label for="popn" class="form-label">POP'n level</label>
              <input type="text" class="form-control form-control-lg" id="popn" name="popn" placeholder="-">
            </div>
            <div class="mb-3">
              <label for="itg" class="form-label">ITG level</label>
              <input type="text" class="form-control form-control-lg" id="itg" name="itg" placeholder="-">
            </div>
            <div class="mb-3">
              <label for="itgd" class="form-label">ITG double level</label>
              <input type="text" class="form-control form-control-lg" id="itgd" name="itgd" placeholder="-">
            </div>
            <div class="mb-3">
              <label for="pump" class="form-label">PUMP level</label>
              <input type="text" class="form-control form-control-lg" id="pump" name="pump" placeholder="-">
            </div>
            <div class="mb-3">
              <label for="pumpd" class="form-label">PUMP double level</label>
              <input type="text" class="form-control form-control-lg" id="pumpd" name="pumpd" placeholder="-">
            </div>
            <div class="mb-3">
              <label for="id" class="form-label">ID</label>
              <input type="text" class="form-control form-control-lg" id="id" name="id" value="<?php echo $_SESSION['id']; ?>" disabled>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button name="submit" type="submit" value="Submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
    </div>
  </div>
</div>
<!--
<script>
$(document).ready(function() {
  $('#control').hide();
  $('#video').resize(function(){
    $('#cont').height($('#video').height());
      $('#cont').width($('#video').width());
      $('#control').height($('#video').height()*0.1);
      $('#control').css('top',$('#video').height()*0.9 );
        $('#control').width($('#video').width());
        $('#control').show();
});
function opencam(){
  navigator.getUserMedia= navigator.getUserMedia ||   navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia ;
  if(navigator.getUserMedia)
  {
    navigator.getUserMedia({video:true },  streamWebCam ,throwError) ;
  }
}

function closecam(){

  video.pause();

  try {
    video.srcObject = null;
  } catch (error) {
    video.src =null;
  }

  var track = strr.getTracks()[0];  // if only one media track
  // ...
  track.stop();

}
  var video= document.getElementById('video');
  var canvas= document.getElementById('canvas');
  var context= canvas.getContext('2d');
  var strr;
  function streamWebCam(stream){
  const  mediaSource = new MediaSource(stream);
  try {
      video.srcObject = stream;
    } catch (error) {
      video.src = URL.createObjectURL(mediaSource);
    }
    video.play();
    strr=stream;
  }
  function throwError(e){
    alert(e.name);
  }
$('#open').click(function(event) {
  opencam();
   $('#control').show();
});
$('#close').click(function(event) {
  closecam();
});
  $('#snap').click(function(event) {
      canvas.width=video.clientWidth;
      canvas.height=video.clientHeight;
      context.drawImage(video,0,0);
      $('#vid').css('z-index','20');
      $('#capture').css('z-index','30');
  });
$('#retake').click(function(event) {
$('#vid').css('z-index','30');
$('#capture').css('z-index','20');
});
});</script>
-->
<?php
    include 'include/footer.php';
?>