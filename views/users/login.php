
<?php


require_once realpath(__DIR__).'/../includes/head.php';
require_once realpath(__DIR__).'/../includes/nav.php';
?>

    <div class="container">

    <?php if (isset($errors) && is_array($errors)):?>
        <ul class="errors">
            <?php foreach($errors as $error):?>
                <li> <?php echo $error;?></li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>

      <form class="form-signin" method="POST" action="/login">
        <h2 class="form-signin-heading">Please Sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remenber" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

<?php

require_once realpath(__DIR__).'/../includes/footer.php';