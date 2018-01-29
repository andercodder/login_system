

<?php   $page_title = "User Authetication - Registration Form";
  include_once 'partials/header.php';
  include_once 'partials/parseSignup.php';
  ?>
  <div>
  <?php if(isset($result)) echo $result; ?>
  <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
  </div>
  <div class="clearfix"></div>
<div class="container">
  <section class="col col-lg-7">

          <form action="" method="POST">

            <div class="form-group">
              <label for="emailField">email</label>
              <input type="email" class="form-control" name="email" id="emailField" placeholder="email address">
            </div>
            <div class="form-group">
              <label for="usernameField">Username</label>
              <input type="text" class="form-control" name="username" id="usernameField" placeholder="username">
            </div>
            <div class="form-group">
              <label for="passwordField">Password</label>
              <input type="password" name="password" class="form-control" id="passwordField" placeholder="Password">
            </div>
             <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
            <button type="submit" name="signupBtn" class="btn btn-primary pull-right">Sign UP</button>
          </form>
    </section>
        <p><a href="index.php">Back</a> </p>

  </div>


<?php include_once 'partials/footer.php'; ?>
</body>
</html>
