<!DOCTYPE html>

  <?php
 error_reporting(E_ALL);
  ini_set('display_errors', 1);
  include_once 'resource/session.php';

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

<?php if (!isset($_SESSION['username'])): ?>

<p>you are not currently sign in <a href="login.php">login</a> Not yet a member?<a href="signup.php">Signup</a></p>
<?php else: ?>
<p>you are logged in as <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a></p>
<?php endif ?>
<?php
//print_r(get_loaded_extensions());

 include_once 'resource/Database.php';


 ?>

</body>
</html>
