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
  $page_title = "User Authentication - Homepage";
  include_once 'partials/header.php';
 ?>


    <div class="container">

        <script type="text/javascript">

          </script>
      <div class="flag">
        <h1>User Authentication-Homepage</h1>
        <p class="lead">Learn to Code A login and registration System with PHP.<br> Enhance your PHP skill and make more cash.</p>


        <?php if (!isset($_SESSION['username'])): ?>

        <p class="lead">you are not currently sign in <a href="login.php">login</a> Not yet a member?<a href="signup.php">Signup</a></p>
        <?php else: ?>
        <p class="lead">you are logged in as <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a></p>
        <?php endif ?>
      </div>

    </div><!-- /.container -->

<hr>

<?php
//print_r(get_loaded_extensions());

 include_once 'resource/Database.php';

include_once 'partials/footer.php';
 ?>


</body>
</html>
