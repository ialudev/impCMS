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

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<ul id="dropdown-user" class="dropdown-content">
  <li><a style="color:#1976D2;" href=""><i class="large material-icons">perm_identity</i>< insert name ></a></li>
  <li><a style="color:#1976D2;" href="#!"><i class="large material-icons">grade</i><?php echo userrank($_SESSION['username']); ?></a></li>
  <li class="divider"></li>
  <li><a style="color:#1976D2;" href="index.php"><i class="large material-icons">settings_backup_restore</i>Go back</a></li>
</ul>

  <nav class="nav-extended blue darken-2">
    <div class="nav-wrapper">

    <ul id="nav-mobile" class="left hide-on-med-and-down">
           <li><a class="dropdown-button" href="#!" data-activates="dropdown-user"><?php echo userdata($_SESSION['username'], "email"); ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="large material-icons left">view_module</i>General</a></li>
        <li><a href="badges.html">placeholder</a></li>
        <li><a href="collapsible.html">placeholder</a></li>
           <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">placeholder<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#sysinfo">System info</a></li>
        <li class="tab"><a href="#test2">Page settings</a></li>
        <li class="tab"><a href="#test3">placeholder</a></li>
        <li class="tab"><a href="#test4">placeholder</a></li>
      </ul>
    </div>
  </nav>

  <div class="container" style="margin-top:20px;">

  <div id="sysinfo" class="col s12">
  <?php //systeminfo data ?>
  	 <div class="row">
      <div class="col s6">
      	
      	    <div class="card-panel grey darken-3">
      <span class="white-text text-white">
   <table class="responsive-table">
        <thead>
          <tr>
              <th><i class="material-icons left">games</i>System</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Build</td>
            <td>1.0.0.12</td>
          </tr>
          <tr>
            <td>System</td>
            <td>Cassiopeia</td>
          </tr>
          <tr>
            <td>Licence</td>
            <td>Owner</td>
          </tr>
        </tbody>
      </table>
      </span>
    </div>

      </div>
      <div class="col s6">
      	
      	    <div class="card-panel grey darken-3">
      <span class="white-text text-white">
   <table class="responsive-table">
        <thead>
          <tr>
              <th><i class="material-icons left">insert_chart</i>Server</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Webserver</td>
            <td>Apache</td>
          </tr>
          <tr>
            <td>PHP</td>
            <td>7.0.13</td>
          </tr>
          <tr>
            <td>MySQL</td>
            <td>5.6</td>
          </tr>
        </tbody>
      </table>
      </span>
    </div>

      </div>

<?php
function getSymbolByQuantity($bytes) {
    $symbols = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB');
    $exp = floor(log($bytes)/log(1024));
 
    return sprintf('%.2f '.$symbol[$exp], ($bytes/pow(1024, floor($exp))));
}
 
## Anwendung:
$hdGnu = disk_free_space("/");
echo getSymbolByQuantity($hdGnu)."GB <div style='color:green;''>&nbsp;FREE</div>";
?>
    </span>
  </li>
    <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      <?php 
      $zahl1 = getSymbolByQuantity($hdGnu);
      $zahl2 = 100;
      $huen = $zahl2 - $zahl1;

      echo $huen."&nbsp;GB&nbsp;<div style='color:red;''>TAKEN</div>";

      ?>
      
    </div>
</div>

  <div id="test2" class="col s12">Test 2</div>
  <div id="test3" class="col s12">Test 3</div>
  <div id="test4" class="col s12">Test 4</div>
  </div>
 

<?php
} // if admin

} // if logged in



?>	



<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="library/libs/js/materialize.min.js"></script>
<script>
$(".button-collapse").sideNav();
</script>
</body>

</html>