<?php
require_once realpath(__DIR__).'/../includes/head.php';
require_once realpath(__DIR__).'/../includes/nav.php';
?>

<div class="container">

      <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading">Sign Up for Free</h2>
        <label for="inputName" class="sr-only">User Name</label>
        <input type="text" name="username" class="form-control" id="inputName" required autocomplete="off" autofocus />
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Email address" id="inputEmail" required autocomplete="off"/>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required autocomplete="off"/>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      </form>

    </div> <!-- /container -->


<?php

require_once realpath(__DIR__).'/../includes/footer.php';