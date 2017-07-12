

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Password Reset Page</title>
</head>
<body>
  <?php   $page_title = "User Authetication - Change Password";
    include_once 'partials/header.php';
      include_once 'partials/parseChangePassword.php';
    ?>
  <div>

<div class="container">
  <section class="col col-lg-7">
    <h2> Change Password </h2><hr>

    <div class="alert-danger">
    <?php if(isset($result)) echo $result; ?>
    <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
    </div>

    <div class="clearfix"></div>
<form method="post" action="">
  <div class="form-group">
        <label for="emailField">Email address</label>
        <input type="text" name="email" class="form-control" id="emailField" placeholder="email">
  </div>

  <div class="form-group">
        <label for="emailField">New Password</label>
        <input type="password" name="new_password" class="form-control" id="passwordField" placeholder="New Password">
  </div>
  <div class="form-group">
        <label for="emailField">Password</label>
        <input type="password" name="confirm_password" class="form-control" id="confirm_passwordField" placeholder="confirm_password">
  </div>
    <button type="submit" name="passwordResetBtn" class="btn btn-primary pull-right">Reset Password</button>
</form>
<p><a href="index.php">Back</a> </p>

</section>

</div>
<?php include_once 'partials/footer.php'; ?>
</body>
</html>
