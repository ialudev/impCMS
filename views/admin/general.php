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
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="?general"><i class="large material-icons left">view_module</i>General</a></li>
        <li><a href="badges.html">placeholder</a></li>
        <li><a href="collapsible.html">placeholder</a></li>
           <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">placeholder<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

   <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a class="dropdown-button" href="#!" data-activates="dropdown-user"><?php echo userdata($_SESSION['username'], "email"); ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#sysinfo">System info</a></li>
        <li class="tab"><a href="#pagesettings">Page settings</a></li>
        <li class="tab"><a href="#seo">SEO / META</a></li>
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

  <div id="pagesettings" class="col s12">

  	<?php // page settings ?>
<div class="row">
   <div class="col s12">
      	
     <div class="card-panel grey darken-3">
      	<span class="white-text text-white">
      	<i class="material-icons left">settings</i>Page settings
      	</span>
     </div>
    </div>

<div class="col s12">
      	
     <div class="card-panel grey darken-2">
      	<span class="white-text text-white">

 <style>
 input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]), input[type=password]:focus:not([readonly]), input[type=email]:focus:not([readonly]), input[type=url]:focus:not([readonly]), input[type=time]:focus:not([readonly]), input[type=date]:focus:not([readonly]), input[type=datetime]:focus:not([readonly]), input[type=datetime-local]:focus:not([readonly]), input[type=tel]:focus:not([readonly]), input[type=number]:focus:not([readonly]), input[type=search]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #e0e0e0;
    box-shadow: 0 1px 0 0 #e0e0e0;
}
input:not([type]):focus:not([readonly])+label, input[type=text]:focus:not([readonly])+label, input[type=password]:focus:not([readonly])+label, input[type=email]:focus:not([readonly])+label, input[type=url]:focus:not([readonly])+label, input[type=time]:focus:not([readonly])+label, input[type=date]:focus:not([readonly])+label, input[type=datetime]:focus:not([readonly])+label, input[type=datetime-local]:focus:not([readonly])+label, input[type=tel]:focus:not([readonly])+label, input[type=number]:focus:not([readonly])+label, input[type=search]:focus:not([readonly])+label, textarea.materialize-textarea:focus:not([readonly])+label {
    color: #e0e0e0;
}
</style>       
      	
<form method="POST" enctype="multipart/form-data">

<div class="input-field">
<input value="<?php echo cms("page_name");?>" id="cms_name" name="page_name" type="text">
<label for="cms_name">Company / Website name</label>
</div>

<div class="input-field">
<input value="<?php echo cms("page_title");?>" id="cms_page_title" name="page_title" type="text">
<label for="cms_page_title">Page title</label>
</div>

<div class="input-field">
<input value="<?php echo cms("page_admin_email");?>" id="cms_admin_email" name="page_admin_email" type="text">
<label for="cms_admin_email">Administrator email</label>
</div>

<div class="input-field">
<input value="<?php echo cms("page_url");?>" id="cms_url" name="page_url" type="text">
<label for="cms_url">Website url</label>
</div>

  <button class="btn waves-effect waves-light grey darken-4" type="submit" name="change_settings">Submit</button>
</form>

<?php 
    
if(isset($_POST['change_settings'])){

$id_set = 1;
// INSERT INTO -> Datenbank                      
$cms_settings = $db->prepare("UPDATE cms_settings SET page_name = :page_name, page_title = :page_title, page_admin_email = :page_admin_email, page_url = :page_url WHERE id = :id");
// Arrays
$cms_settings->bindParam(':id', $id_set);
$cms_settings->bindParam(':page_name', $_POST['page_name']);    
$cms_settings->bindParam(':page_title', $_POST['page_title']);
$cms_settings->bindParam(':page_admin_email', $_POST['page_admin_email']);
$cms_settings->bindParam(':page_url', $_POST['page_url']);                
$cms_settings->execute();
header('Location: /admin.php?general#pagesettings');
                
            }                                  
                                        
    

    ?>   


      	</span>
     </div>
    </div>

   </div>

  </div>

  <div id="seo" class="col s12">
    
    <?php // seo meta etc. ?>
<div class="row">
   <div class="col s12">
        
     <div class="card-panel grey darken-3">
        <span class="white-text text-white">
        <i class="material-icons left">web</i>Search engine optimization<br><br>
        Google: The process of maximizing the number of visitors to a particular website by ensuring that the site appears high on the list of results returned by a search engine.<br>
<i>"the key to getting more traffic lies in integrating content with search engine optimization and social media marketing"</i>
        </span>
     </div>
    </div>



<div class="col s12" style="padding: 0!important;">
<div class="col s6">
        
     <div class="card-panel grey darken-2">
        <span class="white-text text-white">

 <style>
 input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]), input[type=password]:focus:not([readonly]), input[type=email]:focus:not([readonly]), input[type=url]:focus:not([readonly]), input[type=time]:focus:not([readonly]), input[type=date]:focus:not([readonly]), input[type=datetime]:focus:not([readonly]), input[type=datetime-local]:focus:not([readonly]), input[type=tel]:focus:not([readonly]), input[type=number]:focus:not([readonly]), input[type=search]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #e0e0e0;
    box-shadow: 0 1px 0 0 #e0e0e0;
}
input:not([type]):focus:not([readonly])+label, input[type=text]:focus:not([readonly])+label, input[type=password]:focus:not([readonly])+label, input[type=email]:focus:not([readonly])+label, input[type=url]:focus:not([readonly])+label, input[type=time]:focus:not([readonly])+label, input[type=date]:focus:not([readonly])+label, input[type=datetime]:focus:not([readonly])+label, input[type=datetime-local]:focus:not([readonly])+label, input[type=tel]:focus:not([readonly])+label, input[type=number]:focus:not([readonly])+label, input[type=search]:focus:not([readonly])+label, textarea.materialize-textarea:focus:not([readonly])+label {
    color: #e0e0e0;
}
</style>       
        

<form method="POST" enctype="multipart/form-data">
<div class="input-field">
<input disabled value="<?php echo cms("page_title");?>" id="kaka" type="text">
<label for="kaka">Page title (can be changed in page settings)</label>
</div>

<div class="input-field">
<input value="<?php echo cms_seo("meta_description");?>" id="cms_seo_desc" name="meta_description" type="text">
<label for="cms_seo_desc">Meta / Website description</label>
</div>

<div class="input-field">
<input class="chips chips-initial"value="<?php echo cms_seo("meta_keywords");?>" id="keywords" name="meta_keywords" type="text">
<label for="keywords">Meta keywords</label>
</div>
    <button class="btn waves-effect waves-light grey darken-4" type="submit" name="change_seo_info">Update info</button>
</form>

<script>

  $('.chips').material_chip();
  $('.chips-initial').material_chip({
    data: [{
      tag: 'Apple',
    }, {
      tag: 'Microsoft',
    }, {
      tag: 'Google',
    }],
  });
  $('.chips-placeholder').material_chip({
    placeholder: 'Enter a tag',
    secondaryPlaceholder: '+Tag',
  });
  $('.chips-autocomplete').material_chip({
    autocompleteOptions: {
      data: {
        'Apple': null,
        'Microsoft': null,
        'Google': null
      },
      limit: Infinity,
      minLength: 1
    }
  });
        </script>

<?php 
    
if(isset($_POST['change_seo_info'])){

$id_set = 1;
// INSERT INTO -> Datenbank                      
$cms_seo_info = $db->prepare("UPDATE cms_seo SET meta_description = :meta_description, meta_keywords = :meta_keywords WHERE id = :id");
// Arrays
$cms_seo_info->bindParam(':id', $id_set);
$cms_seo_info->bindParam(':meta_description', $_POST['meta_description']);
$cms_seo_info->bindParam(':meta_keywords', $_POST['meta_keywords']);                    
$cms_seo_info->execute();
header('Location: /admin.php?general#seo');
                
            }                                  
                                        
    

    ?>   
  </span>
  </div>

</div> <!-- hier endet linkes col6 -->

<div class="col s6">
        
     <div class="card-panel white">
<div id="googlelogo"></div>
<div id="googleh1"><?php echo cms("page_title");?></div>
<div id="googlerm" style="float:left;"><?php echo cms("page_url");?></div><i style="color: green;
    margin-top: 3px;" class="tiny material-icons left">arrow_drop_down</i><br>
<div id="googlerm2"><?php echo cms_seo("meta_description");?></div>
<br>
<div id="googleh1">Microsoft – Official Home Page</div>
<div id="googlerm" style="float:left;">https://www.microsoft.com/</div><i style="color: green;
    margin-top: 3px;" class="tiny material-icons left">arrow_drop_down</i><br>
<div id="googlerm2">At Microsoft our mission and values are to help people and businesses throughout the world realize their full potential.</div>

    </div>
</div>
</div> <!-- end of col12 -->

   <div class="col s12">
        
     <div class="card-panel grey darken-3">
        <span class="white-text text-white">
        <i class="material-icons left">perm_media</i>Media settings
        </span>
     </div>
    </div>

<div class="col s12" style="padding: 0!important;">
<div class="col s6">
        
     <div class="card-panel grey darken-2">
        <span class="white-text text-white">

<form method="POST" enctype="multipart/form-data">
<div class="input-field">
<input value="<?php echo cms_seo("meta_themecolor");?>" id="themecolor" name="meta_themecolor" type="text">
<label for="themecolor">Mobile / Android google chrome color</label>
</div>

<style>
.switch label input[type=checkbox]:checked+.lever {
    background-color: #3c3c3c;
}
.switch label input[type=checkbox]:checked+.lever:after {
    background-color: #ececec;
    left: 24px;
}
</style>

  <div class="switch">
    <label>
      Off
      <input type="checkbox" checked>
      <span class="lever"></span>
      On
    </label>
  </div>
  
    <button style="margin-top:15px;" class="btn waves-effect waves-light grey darken-4" type="submit" name="change_theme_color">Update Color</button>
</form>

<?php 
    
if(isset($_POST['change_theme_color'])){

$id_set = 1;
// INSERT INTO -> Datenbank                      
$cms_seo_theme = $db->prepare("UPDATE cms_seo SET meta_themecolor = :meta_themecolor WHERE id = :id");
// Arrays
$cms_seo_theme->bindParam(':id', $id_set);
$cms_seo_theme->bindParam(':meta_themecolor', $_POST['meta_themecolor']);                  
$cms_seo_theme->execute();
header('Location: /admin.php?general#seo');
                
            }                                  
                                        
    

    ?>   


        </span>
     </div>
    </div>

    <div class="col s6">
        <style>
       #hund i.left {
    float: left;
    margin-right: 8px;
    margin-top:3px;
}
</style>
     <div class="card-panel white">
<!-- mobile handy -->
<div id="googlebrowsertop" style="background-color:<?php echo cms_seo("meta_themecolor");?>;">
<div id="hund">
<i class="tiny material-icons left">android</i></div>
<div id="hund" style="float:right;">
<i class="tiny material-icons left">perm_scan_wifi</i>
<i class="tiny material-icons left">dialer_sip</i>
<i class="tiny material-icons left">settings_bluetooth</i>4:40
</div>
</div>
<div id="googlebrowserbottom" style="background-color:<?php echo cms_seo("meta_themecolor");?>;">
  
<div id="googleinput"><?php echo cms("page_url");?>
 <i class="material-icons right">more_vert</i>
</div>

</div>
<div id="googlewebsitebottom">
</div>

      </div>
      </div>
     </div>  <!-- hier endet col12 -->

     <div class="col s12" style="padding: 0!important;">
<div class="col s6">
        
     <div class="card-panel grey darken-2">
        <span class="white-text text-white">
<!-- update windows10 tiles -->
<form method="POST" enctype="multipart/form-data">
<div class="input-field">
<input value="<?php echo cms_seo("msapplication_TileColor");?>" id="msapplication_TileColor" name="msapplication_TileColor" type="text">
<label for="msapplication_TileColor">Windows 10 Tile color</label>

<p style="margin-top: 0px;margin-bottom: 14px;">
      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      <label for="filled-in-box">Use the favicon as tileicon</label>
</p>

</div>


    <button style="margin-top:15px;" class="btn waves-effect waves-light grey darken-4" type="submit" name="change_windows_tiles">Update tile</button>
</form>

<?php 
    
if(isset($_POST['change_windows_tiles'])){

$id_set = 1;
// INSERT INTO -> Datenbank                      
$cms_seo_tile = $db->prepare("UPDATE cms_seo SET msapplication_TileColor = :msapplication_TileColor WHERE id = :id");
// Arrays
$cms_seo_tile->bindParam(':id', $id_set);
$cms_seo_tile->bindParam(':msapplication_TileColor', $_POST['msapplication_TileColor']);                  
$cms_seo_tile->execute();
header('Location: /admin.php?general#seo');
                
            }                                  
                                        
    

    ?>




        </span>
        </div>
</div>

<div class="col s6">
        
 <div class="card-panel white">

<div id="mstiltebg">

 <div id="mstile" style="background-color:<?php echo cms_seo("msapplication_TileColor");?>;">
 <div id="mstest"><i class="medium material-icons">language</i></div>
    <div style="color:white;    margin-top: 36px;
    margin-left: 6px;"><?php $huen = cms("page_title"); ?>
      <?php echo shortern($huen, "20"); ?>
    </div>
 </div>

 <div id="mstile" style="background-color:#16a085;">
 <div id="mstest"><i class="medium material-icons">email</i></div>
    <div style="color:white;    margin-top: 36px;
    margin-left: 6px;">Mail</div>
 </div>

  <div id="mstile" style="background-color:#2c3e50;">
 <div id="mstest"><i class="medium material-icons">perm_contact_calendar
</i></div>
    <div style="color:white;    margin-top: 36px;
    margin-left: 6px;">Contacts</div>
 </div>

</div>

        </div>
</div>
        </div> <!-- hier endet col12 -->

   </div>



  </div>
  <div id="test4" class="col s12">Test 4</div>
  </div>