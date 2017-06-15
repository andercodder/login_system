<?php
    include_once 'resource/session.php';
    include_once 'resource/Database.php';
    include_once 'resource/utilities.php';

    if(isset($_POST['loginBtn'])) {

      //array to hold error_get_last
      $form_errors = array();


      //validate
      $required_fields = array('username', 'password');

      $form_errors = array_merge($form_errors, check_empty_fields($required_fields));
      # code...

        if (empty($form_errors)) {

          //check if user exist in the database
          # code...
        }else {
          if (count($form_errors) == 1){
            $result = "<p style='color:red;'> There was one error in the form </p>";
            # code...
          }else {
            $result = "<p style='color:red;'> There were " . count($form_errors). " error in the form</p>";
          }
        }
      }
 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
  </head>
  <body>

    <h2>User Authentication System</h2><hr>
    <h3>Login Form</h3>

<?php if (isset($result))  echo $result; ?>
<?php if (!empty($form_errors)) echo show_errors($form_errors); ?>

    <form class="" action="" method="post">
      <table>
        <tr>
          <td>Username:</td><td><input type="text" name="username" value=""></td>
        </tr>
        <tr>
            <td>Password:</td><td><input type="text" name="password" value=""></td>
        </tr>
        <tr>
          <td><input  type="submit" name="loginBtn" value="Signin" style="float:right;"></td>
        </tr>
      </table>

    </form>

    <p> <a href="index.php">Back</a></p>

  </body>
</html>
