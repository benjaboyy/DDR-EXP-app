<?php 
    define("PAGECOLOR","dark"); 
    include 'include/header.php';
    $achievements = array("fas fa-splotch", "fas fa-stopwatch", "fas fa-pastafarianism", "fas fa-bomb", "fas fa-cloud-moon");
    $stats = array("50", "30", "75", "80");
?>
        <style>
            .disabled-quest{
                color: gray !important;
            }
            .table-inside{
                margin-bottom:0px;
                margin-left: -5px;
                margin-top: -10px;
            }
        </style>
        <h2 class="text-dark">Achievements</h2>
<!--        <img src="https://via.placeholder.com/1000x300" class="img-fluid" alt="...">-->
                <table class="table">
                  <tbody>
                    <tr>
                      <th>Collected</th>
                      <td>5/25</td>
                    </tr>
                  </tbody>
                </table>
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
                    <h5 class="card-title">Do a Quad</h5>
                    <p class="card-text">100% a song on ITG X of higher</p>
                    <table style="margin-bottom:0px;" class="table table-inside table-sm table-borderless">
                      <tbody>
                        <tr>
                          <td>Bronze</td>
                          <td>6</td>
                        </tr>
                        <tr>
                          <th >Silver</th>
                          <td>9</td>
                        </tr>
                        <tr>
                          <td>Gold</td>
                          <td>11</td>
                        </tr>
                      </tbody>
                    </table>
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
            <div class="card text-white bg-light mb-3" >
              <div class="disabled-quest card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col-9">
                    <h5 class="card-title">Marathon</h5>
                    <p class="card-text">Play a song of at least 10 minutes.</p>
                  </div>
                  <div class="col-3">
<!--                    <span style="float:right;"><i style="font-size: 70px;" class="fas fa-stopwatch"></i></span>-->
                  </div>
                </div>
              </div>
            </div>  
            <div class="card text-gray bg-light  mb-3" >
              <div class="disabled-quest card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col-9">
                    <h5 class="card-title">Do a Quad</h5>
                    <p class="card-text">100% a song on ITG X of higher</p>
                    <table class="table table-inside table-sm table-borderless disabled-quest ">
                      <tbody>
                        <tr>
                          <td>Bronze</td>
                          <td>6</td>
                        </tr>
                        <tr>
                          <td>Silver</td>
                          <td>9</td>
                        </tr>
                        <tr>
                          <td >Gold</td>
                          <td>11</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-3">
<!--                    <span style="float:right;"><i style="font-size: 70px;" class="fas fa-splotch"></i></span>-->
                  </div>
                </div>
              </div>
            </div>  
            <div class="card bg-light mb-3" >
              <div class="disabled-quest card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col-9">
                    <h5 class="card-title">Locked in</h5>
                    <p class="card-text">Has visited a lockin event.</p>
                  </div>
                  <div class="col-3">
<!--                    <span style="float:right;"><i style="font-size: 70px;" class="fas fa-cloud-moon"></i></span>-->
                  </div>
                </div>
              </div>
            </div>  
<?php
    include 'include/footer.php';
?>