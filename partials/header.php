<?php
error_reporting(E_ALL);
 ini_set('display_errors', 1);
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';
?>


<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--to work offline bootstrap CSS-->
<link rel="stylesheet" href="bootstrap-4.0.0-alpha.6/dist/css/bootstrap.min.css">

<!--css for font awesome -->
<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
<!--sweetalert -->
<script src="./sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="./sweetalert-master/dist/sweetalert.css">
<!--sweetalert-->

<!-- my css -->
<link rel="stylesheet" type="text/css" href="css/custom-style.css">
<!-- -->
    <title><?php if(isset($page_title)) echo $page_title; ?></title>
</head>
<body>


  <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md  fixed-top">
 <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
  <a class="navbar-brand" href="index.php">User Authentication</a>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto mt-2 mt-md-0 navbar-right"><i class="hide"> <?php echo guard(); ?></i>
     <li class="nav-item">
       <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
     </li>
         <?php if((isset($_SESSION['username']) || isCookieValid($db))): ?>
           <li class="nav-item">
             <a class="nav-link" href="#">My Profile</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="logout.php">Logout</a>
           </li>
       <?php else: ?>
           <li class="nav-item">
             <a class="nav-link" href="#">about</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="login.php">Login</a><li>

               <li class="nav-item">
                 <a class="nav-link" href="#">Features</a><li>
               <?php endif ?>


   </ul>

 </div>
</nav>
