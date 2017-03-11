<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Bootstrap 101 Template</title>


    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="libs/css/couscous.css">       
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
<script src="https://use.fontawesome.com/c27f4372b5.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">

   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
 </head>
 <body id="mainpage">

<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php"><i style="margin-right:5px;" class="fa fa-cogs" aria-hidden="true"></i>
  Imperial <b style="font-weight: 600;">Creativity</b></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>
      <li class="nav-item" style="margin-left:10px;">
    <form class="form-inline my-2 my-lg-0">
      <input style="margin-right: -3px!important;font-size: 13px;height: 40px;" class="form-control mr-sm-2" type="text" placeholder="What are you looking for?">
      <button style="border-top-left-radius: 0px;border-bottom-left-radius: 0px;" class="btn btn-danger" role="button" aria-pressed="true" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
</button>
    </form>
    </li>

    </ul>

<?php

/**
 * A simple PHP Login Script / ADVANCED VERSION
 * For more versions (one-file, minimal, framework-like) visit http://www.php-login.net
 *
 * @author Panique
 * @link http://www.php-login.net
 * @link https://github.com/panique/php-login-advanced/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once('libraries/password_compatibility_library.php');
}
// include the config
require_once('config/config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
require_once('translations/en.php');

// include the PHPMailer library
require_once('libraries/PHPMailer.php');

// load the login class
require_once('classes/Login.php');

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) { 
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
  ?>
<ul class="navbar-nav">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="index.php" id="userProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo htmlspecialchars($_SESSION['user_name']); ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userProfile">
          <a class="dropdown-item" href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>
          <a class="dropdown-item" href="edit.php"><?php echo WORDING_EDIT_USER_DATA; ?></a>
        </div>
      </li>
    </ul>


  </div>
</nav>

<?php
} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
  ?> 

    <ul class="navbar-nav">
      <li class="nav-item active" style="background-color: rgba(255, 255, 255, 0.15);border-radius: 4px;">
         <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in" aria-hidden="true"></i>
Sign in<span class="sr-only">(current)</span></a>
      </li>
    </ul>

      </div>
</nav>

 <!-- Button trigger modal -->

   <?php include("views/not_logged_in.php"); ?>



 <!-- Modal -->

<?php }


?>






 <div style="width: 100%;height:70px;"></div>

<script>
 $('#myModal').on('shown.bs.modal', function () {
 $('#myInput').focus()
})
</script>

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo '<div class="container-fluid"><div class="alert alert-danger" role="alert">'.$error.'</div></div>';
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo '<div class="container-fluid"><div class="alert alert-danger" role="alert">'.$message.'</div></div>';
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo '<div class="container" style="margin-top:15px;margin-bottom:-15px;"><div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  '.$error.'
</div></div>';
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
          echo '<div class="container" style="margin-top:15px;margin-bottom:-15px;"><div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
'.$message.'
</div></div>';
        }
    }
}
?>
