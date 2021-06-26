<?php 
    define("PAGECOLOR","primary"); 
    include 'include/header.php';
    include 'include/get_scores.php';
?>
        <h2 class="text-primary"><i class="fas fa-trophy"></i> Local Highscores</h2>
<!--        <img src="https://via.placeholder.com/1000x300" class="img-fluid" alt="...">-->
        <br>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-itg" aria-expanded="false" aria-controls="flush-collapseOne">
                In the Groove - Single
              </button>
            </h2>
            <div id="flush-itg" class="accordion-collapse collapse" aria-labelledby="flush-itg" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table">
                  <tbody>
                    <tr>
                      <th>Rank</th>
                      <th>User</th>
                      <th>Level</th>
                    </tr>
                       <?php
                           print("$output_itg");
                       ?>
                    </tbody>
                   </table>
               </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-itgd" aria-expanded="false" aria-controls="flush-collapseOne">
                In the Groove - Double
              </button>
            </h2>
            <div id="flush-itgd" class="accordion-collapse collapse" aria-labelledby="flush-itg" data-bs-parent="#accordionFlushExample">
               <div class="accordion-body">
                <table class="table">
                  <tbody>
                    <tr>
                      <th>Rank</th>
                      <th>User</th>
                      <th>Level</th>
                    </tr>
                       <?php
                           print("$output_itg_d");
                       ?>
                    </tbody>
                   </table>
               </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-pump" aria-expanded="false" aria-controls="flush-collapseOne">
                Pump it Up - Single
              </button>
            </h2>
            <div id="flush-pump" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
               <div class="accordion-body">
                <table class="table">
                  <tbody>
                    <tr>
                      <th>Rank</th>
                      <th>User</th>
                      <th>Level</th>
                    </tr>
                       <?php
                           print("$output_pump");
                       ?>
                    </tbody>
                   </table>
               </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-pumpd" aria-expanded="false" aria-controls="flush-collapseOne">
                Pump it Up - Double
              </button>
            </h2>
            <div id="flush-pumpd" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
               <div class="accordion-body">
                <table class="table">
                  <tbody>
                    <tr>
                      <th>Rank</th>
                      <th>User</th>
                      <th>Level</th>
                    </tr>
                       <?php
                           print("$output_pump_d");
                       ?>
                    </tbody>
                   </table>
               </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-iidx" aria-expanded="false" aria-controls="flush-collapseTwo">
                Beatmania IIDX
              </button>
            </h2>
            <div id="flush-iidx" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
               <div class="accordion-body">
                <table class="table">
                  <tbody>
                    <tr>
                      <th>Rank</th>
                      <th>User</th>
                      <th>Level</th>
                    </tr>
                       <?php
                           print("$output_iidx");
                       ?>
                    </tbody>
                   </table>
               </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-popn" aria-expanded="false" aria-controls="flush-collapseTwo">
                Pop'n Music
              </button>
            </h2>
            <div id="flush-popn" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
               <div class="accordion-body">
                <table class="table">
                  <tbody>
                    <tr>
                      <th>Rank</th>
                      <th>User</th>
                      <th>Level</th>
                    </tr>
                       <?php
                           print("$output_popn");
                       ?>
                    </tbody>
                   </table>
               </div>
            </div>
          </div>
        </div>
        <br>
        <h3 class="text-primary">National</h3>
        <a href="https://google.com" class="custom-card">
            <div class="card bg-primary col-12 mb-3">
              <div class="card-body text-light">
                <h5 class="card-title">Stamina PR</h5>
              </div>
            </div>
        </a>
        <a href="https://google.com" class="custom-card">
            <div class="card bg-primary col-12 mb-3">
              <div class="card-body text-light">
                <h5 class="card-title">Long stuff leaderboard</h5>
              </div>
            </div>
        </a>
<?php
    include 'include/footer.php';
?>