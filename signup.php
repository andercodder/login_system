
<?php


//error_reporting(E_ALL);
 //ini_set('display_errors', 1);
//add database connection script
include_once 'resource/Database.php';

//process the form
if (isset($_POST['signupBtn'])) {

  //initialize an array to store any error message from the form
  $form_errors = array();
 $name_of_fields = "";
  //form validation
  $required_fields = array('email', 'username', 'password');

  //loop though the required fields ArrayAccess
  foreach($required_fields as $name_of_fields) {

    if (!isset($_POST[$name_of_fields]) || $_POST[$name_of_fields] == NULL) {
      $form_errors[] = $name_of_fields . " is a required field ";
      # code...
    }

  }
  //check if error arry is empty, if yes process form data and insert resourcebundle_get_error_code


    //collect form data and store in variable

    # code...
//  }
//}

if (empty($form_errors)) {
  //collect form data and store in variable
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

//HASHING PASSWORD
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
  //sql insert statement
  $sqlInsert = "INSERT INTO users (username, email, password, join_date)
                VALUES (:username, :email, :password, now())";
  // use PDO prepared to sanitize data
  $statement = $db->prepare($sqlInsert);

  //add the data into the Database
  $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $hashed_password));

  //check if one new row was created
   if ($statement->rowCount() == 1) {
        $result = "<p style='padding:20px; color:green;'> Registration Sucessfully</p>";
     # code...
   }
} catch (PDOException $ex) {
  //display error message
  $result = "<p style='padding:20px; color:red;'> An error occured: ".$ex->getMessage()." </p>";
   }
}else{
  if (count($form_errors) == 1) {
    $result = "<p style='color: red;'> There was 1 error in the form<br>";
  //$result = "<p style='color:red;'> There were ".count($form_errors). "errors in the form <br>"
  $result .= "<ul style='color:red;'>";
  //loop though error array and display all imagecreatefromstring
  foreach ($form_errors as $error) {
      $result .= "<li> {$error} </li>";
    }
    $result .= "</ul></p>";
  # code...
}else {
  $result = "<p style='color:red;'> There were " .count($form_errors). " errors in the form <br>";

  $result .= "<ul style='color:red;'>";
  //loop though error array and displayy all imagecreatefromstring
  foreach ($form_errors as $error) {
    $result .= "<li>{$error}</li>";
    # code...
  }
   $result .= "</ul></p>";
   }
  }
 }
//var_dump($_POST);

 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>
  </head>
  <body>

    <h2>User Authentication System</h2><hr>
    <h3>Registration Form</h3>

    <?php if (isset($result))  {
      echo "$result";

      # code...
    } ?>
    <form class="" action="" method="post">
      <table>
        <tr>
          <td>Email:</td> <td><input type="text" name="email" value=""></td>
        </tr>
        <tr>
          <td>Username:</td><td><input type="text" name="username" value=""></td>
        </tr>
        <tr>
            <td>Password:</td><td><input type="text" name="password" value=""></td>
        </tr>
        <tr>
          <td ><input  type="submit" name="signupBtn" value="Signup" style="float:right;"></td>
        </tr>
      </table>

    </form>

    <p> <a href="index.php">Back</a></p>

  </body>
</html>
