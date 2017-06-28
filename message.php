<?php
error_reporting(E_ALL);
 ini_set('display_errors', 1);
  // db connection with feedback database
  include_once 'resource/Database.php';
  include_once 'resource/utilities.php';


  if (isset($_POST['sendBtn'])) {

    # Array to hold error_get_last...
    $form_errors =array();

    #validate the form
    $required_fields  = array('email', 'username','message');

    # call the function to check empty field and merge the return data into form
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    #fields that require checking for minimum length
    $fields_to_check_length = array('username' => 4 , 'message' => 10 );

    #merge the return data and calling the function to check minimum length
    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));
    $form_errors = array_merge($form_errors, check_email($_POST));

    if (empty($form_errors)) {

      $email = $_POST['sender_email'];
      $username = $_POST['sender_name'];
      $message = $_POST['message'];
  //error starts here
      try {
        $sqlInsert = "INSERT INTO  feedback (sender_name, sender_email, message, send_date) VALUES (:username, :email, :message, now())";

         //prepare to sanitize data
        $statement =$db->prepare($sqlInsert);

        //add the data into the database
        $statement->execute(array(':sender_name' => $username, 'sender_email' => $email, 'message' => $message ));


        //check if one new row was created
        if ($statement->rowCount() == 1) {

          $result = "<p style='padding:20px; border:1px solid gray; color:green;'>"
          # code...
        }

      } catch (Exception $e) {
        $result = "<p style='padding:20px; border: 1px solid gray; color: red;'> An error occurred: ".$ex->getMessage()."</p>";

      }

    }
    else{
        if(count($form_errors) == 1){
            $result = "<p style='color: red;'> There was 1 error in the form<br>";
        }else{
            $result = "<p style='color: red;'> There were " .count($form_errors). " errors in the form <br>";
        }
    }
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Send Message</title>
  </head>
  <body>
    <h1>User Authentication System</h1>
    <hr>
    <h3>Contact Form</h3>
    <form class="" action="" method="post">
      <table>
        <tr>
          <td>Email:</td><td><input type="email" name="email" value=""></td>
          </tr>
          <td>Username:</td><td><input type="text" name="username" value=""></td>
        </tr>
        <tr>
            <td>Message:</td><td><textarea name="message"></textarea></td>
        </tr>
        <tr>
        <td><input  type="submit" name="SendBtn" value="Send Message" style="float:right; margin: 0 auto;"></td>
        </tr>
      </table>

    </form>


  </body>
</html>
