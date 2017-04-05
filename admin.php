<?php
include("cassiopeia/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo cms("page_title");?></title>
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="library/libs/css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="library/style.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="library/libs/js/materialize.min.js"></script>

<!--Let browser know website is optimized for mobile-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>
<?php 
// Check if User is logged in
if(!$user->is_logged_in() ) { echo '<meta http-equiv="refresh" content="0; URL=localhost" />'; } 
// if user is logged in check if user is a admin
elseif($user->is_logged_in() ) { 
// if user is a admin = show adminpanel
if(admincheck($_SESSION['username']) == 7) { 
// contain the admin panel
?>

<?php if(isset($_GET['general']))
{
	include('views/admin/general.php');
} ?>
 

<?php
} // if admin

} // if logged in



?>	


<script>
$(".button-collapse").sideNav();
</script>
</body>

</html>