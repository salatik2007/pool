<?php
require_once realpath(__DIR__).'/../includes/head.php';
require_once realpath(__DIR__).'/../includes/nav.php';
?>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Marketing stuff Home Page!</h1>
        <h2><?=$_SERVER['REQUEST_URI']?></h2>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
      <?php
      foreach ($znach as $result)
      {
     
      ?>
        <div class="col-lg-4">
          <h2> <?=$result['title'];?> </h2>
             <p> <?=$result['calendar'];?> </p>
             <p><?=$result['reit'];?> </p>
          <p>    <?=$result['countent'];?></p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        
        <!-- <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
      </div>*/--> 
      <?php 
      } 
      ?>
        </div>
       
<?php
require_once realpath(__DIR__).'/../includes/footer.php';