<?php
error_reporting(E_ALL);
 ini_set('display_errors', 1);
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

if(isset($_POST['loginBtn'], $_POST['token'])){

  //validate the token
  if(validate_token($_POST['token'])){
  //process the form
  //array to hold errors
  $form_errors = array();

//validate
  $required_fields = array('username', 'password');
  $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

  if(empty($form_errors)){

      //collect form data
      $user = $_POST['username'];
      $password = $_POST['password'];

      isset($_POST['remember']) ? $remember = $_POST['remember'] : $remember = "";

      //check if user exist in the database
      $sqlQuery = "SELECT * FROM users WHERE username = :username";
      $statement = $db->prepare($sqlQuery);
      $statement->execute(array(':username' => $user));

     if($row = $statement->fetch()){
         $id = $row['id'];
         $hashed_password = $row['password'];
         $username = $row['username'];
         // activate user sign in for the first timer
        $activated =$row['activated'];
        if ($activated == "0") {
            $result = flashMessage("Please activate your account");
        }
        else {

          if(password_verify($password, $hashed_password)){
              $_SESSION['id'] = $id;
              $_SESSION['username'] = $username;

              //remember me collator_get_error_code
              $fingerprint = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
              $_SESSION['last_active'] = time();
              $_SESSION['fingerprint'] = $fingerprint;

              if ($remember === "yes") {
                rememberMe($id);
               }


              //call sweet alert
             echo $welcome ="<script type=\"text/javascript\">
             swal({
                        title: \"welcome back $username!\",
                        type: \"success\",
                        text: \"You're being logged in.\",
                        timer: 6000,
                        showConfirmButton: false
                        });
                        setTimeout(function(){
                          window.location.href = 'index.php';
                        }, 5000)

                           </script>";
           //redirectTo('index');
          }else{
            // if(!empty($form_errors)){
              $result = flashMessage(" You have entered an Invalid password");
              }
            }
         }else {
         $result = flashMessage("You have entered an Invalid username");
     }
  }else{
      if(count($form_errors) == 1){
          $result = flashMessage("There was one error in the form");
      }else{
          $result = flashMessage("There were " .count($form_errors). " error in the form ");
      }
  }
}

}else {
  //trow an error

  $result = "<script type='text/javascript'>
                swal('Error, 'this request originates from an unknown source, possible attack', 'error ')
                </script>";
}
