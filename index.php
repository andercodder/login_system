<!DOCTYPE html>

  <?php
 error_reporting(E_ALL);
  ini_set('display_errors', 1);

/*  ini_set('include_path', '/etc/php5/cli/20131226/pdo.so');

  if (!defined('PDO::ATTR_DRIVER_NAME')) {
  echo 'PDO unavailable';
  }
  elseif (defined('PDO::ATTR_DRIVER_NAME')) {
  echo 'PDO available test'; }*/
 ?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>
<h2>User Authentication System </h2><hr>

<p>you are not currently sign in <a href="login.php">login</a> Not yet a member?<a href="signup.php">Signup</a></p>
<p>you are logged in as {username} <a href="logout.php">Logout</a></p>

<?php
//print_r(get_loaded_extensions());

 include_once 'resource/Database.php';


 ?>

</body>
</html>
