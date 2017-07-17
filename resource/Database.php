<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);
//set_include_path('/etc/php5/cli/20131226/pdo.so');
$username_db = 'andre_wd';
$dsn = 'mysql:host=localhost;dbname=register';
$password = 'mywdpass';


try {
  $db = new PDO($dsn, $username_db, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //echo "conneted to register database";

} catch (PDOException
$ex) {
  echo "Connetcion failed" . $ex->getMessage();

}


?>
