

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
<h2>Login Form </h2><hr>

<?php
error_reporting(E_ALL);
 ini_set('display_errors', 1);
 $page_title = "Login Page";
  include_once 'partials/header.php';
  include_once 'partials/parseLogin.php';
   ?>
<div>
<?php if(isset($result)) echo $result; ?>
<?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
</div>
<div class="clearfix"></div>
<div class="container">
  <section class="col col-lg-7">

          <form action="" method="post">
            <div class="form-group">
              <label for="usernameField">Username</label>
              <input type="text" class="form-control" name="username" id="usernameField" placeholder="username">
            </div>
            <div class="form-group">
              <label for="passwordField">Password</label>
              <input type="password" name="password" class="form-control" id="passwordField" placeholder="Password">
            </div>

            <div class="checkbox">
              <label>
                <input name="remember" type="checkbox" value="yes"> Remember Me
              </label>
            </div>
            <a href="password_recovery_link.php"> Forgot password ? </a>

             <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
            <button type="submit" name="loginBtn" id="loginBtn" class="btn btn-primary pull-right">Sign in</button>
          </form>
    </section>
        <p><a href="index.php">Back</a> </p>

  </div>


<?php include_once 'partials/footer.php'; ?>
</body>
</html>
