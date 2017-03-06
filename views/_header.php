<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Bootstrap 101 Template</title>

   <!-- Bootstrap -->
   <link href="libs/css/bootstrap-flex.css" rel="stylesheet">
   <link href="libs/css/couscous.css" rel="stylesheet">
   <script src="https://use.fontawesome.com/c27f4372b5.js"></script>

   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
 </head>
 <body>

    <nav class="navbar navbar-light bg-faded">
   <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
   <div class="collapse navbar-toggleable-md" id="navbarResponsive">
     <a class="navbar-brand" href="#">Imperial Creativiy</a>
     <ul class="nav navbar-nav">
       <li class="nav-item">
         <a class="nav-link" href="#"><i class="fa fa-area-chart" aria-hidden="true"></i>
Champion Statistics</a>
       </li>
             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
       <li class="nav-item">
         <a class="nav-link" href="#"><i class="fa fa-users" aria-hidden="true"></i>
Pro Players</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
Leaderboard</a>
       </li>
       <li class="nav-item float-lg-right">
         <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in" aria-hidden="true"></i>
Login</a>
       </li>
     </ul>
   </div>
 </nav>

 <!-- Button trigger modal -->

 <!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
         <h4 class="modal-title" id="myModalLabel">Login</h4>
       </div>
       <div class="modal-body">
         ...
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">Save changes</button>
       </div>
     </div>
   </div>
 </div>

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
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo '<div class="container" style="margin-top:15px;margin-bottom:-15px;"><div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  '.$error.'
</div></div>';
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
          echo '<div class="container" style="margin-top:15px;margin-bottom:-15px;"><div class="alert alert-success alert-dismissible fade in" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
'.$message.'
</div></div>';
        }
    }
}
?>
