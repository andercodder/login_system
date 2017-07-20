<?php

  $page_title = "User Authentication - edit Profile";
  include_once 'partials/header.php';
  include_once 'partials/parseProfile.php';


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title><?php if(isset($page_title)) echo $page_title; ?></title>
   </head>
   <body>

     <div class="container">

        <section class="col col-lg-7">
            <h2>Edit Profile</h2><hr>
            <div class="">
              <?php if(isset($result)) echo $result; ?>
              <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>

            </div>
            <div class="clearfix"></div>
              <?php if(!isset($_SESSION['username'])): ?>
                <p class="lead">You Are not authorized to view this page <a href="login.php">Login</a>Not yet a member? <a href="signup.php">Signup</a></p>
              <?php else: ?>

                <form  action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="emailField">Email</label>
                    <input type="text" name="email" class="form-control" id="emailField" value="<?php if(isset($email)) echo $email; ?>">
                  </div>

                  <div class="form-group">
                    <label for="usernameField">Username</label>
                    <input type="text" name="username" class="form-control" id="usernameField" value="<?php if(isset($username)) echo $username; ?>">
                  </div>

                  <div class="form-group">
                    <label for="fileField">Avatar</label>
                    <input type="file" name="avatar"  id="fileField" >
                  </div>

                  <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
                  <button type="submit" name="updateProfileBtn" class="btn btn-primary pull-right">Update Profile</button>

                </form>
              <?php endif ?>
        </section>
        <p><a href="index.php">Back</a></p>

     </div>
    <?php include_once 'partials/footer.php'; ?>


   </body>
 </html>
