<?php
include("cassiopeia/config.php");
include("views/_header.php");
?>

<?php
//process login form if submitted
if(isset($_POST['submit'])){
	
	
$userinfo = $db ->prepare("SELECT * FROM members WHERE username = :profilename LIMIT 1");
$userinfo->bindParam(":profilename", $_POST['username']); 
$userinfo->execute();
while($infuser = $userinfo->fetch()){ $username = $infuser['username']; }

	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: http://'.$_SERVER[HTTP_HOST].''.$_SERVER[REQUEST_URI].'');
		exit;
	
	} else {
		$error[] = '<div style="background-color: #F44336;
    color: white;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    font-size: 17px;
    padding: 15px;margin-bottom: 26px;
    margin-top: -15px;">Passwort or Username is wrong</div>';
	}

}//end if submit

?>

<?php if(!$user->is_logged_in() ) { ?>	

<div style="margin:14px;">
			<form method="post" autocomplete="off">

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo ''.$error.'';
					}
				}

				if(isset($_GET['action'])){

					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h2 class='bg-success'>Your account has been activated successfully.</h2>";
							break;
						case 'reset':
							echo "<h2 class='bg-success'>We have sent you a confirmation E-Mail to help you recover your password</h2>";
							break;
						case 'resetAccount':
							echo "<h2 class='bg-success'>Your password has been changed successfully.</h2>";
							break;
					}

				}

				
				?>



      <div class="login-tit">Log In</div>

    <input style="    border-bottom: solid 1px rgba(0, 0, 0, 0.23);border-top-left-radius: 3px;border-top-right-radius: 3px;" placeholder="Username" class="newlogininput" name="username" type="text" value="<?php if(isset($error)){ echo htmlspecialchars($_POST['username']); } ?>">

       
    <input style="border-bottom-left-radius: 3px;border-bottom-right-radius: 3px;" placeholder="Password" class="newlogininput" name="password" type="password">
                
				

<button class="leologin" type="submit" name="submit">Login</button>

<a href="/register"><p class="leolugi"><i style="float: left;margin-right: 9px;" class="material-icons">create</i>Create a new account</p></a>


                
			</form>
			
</div>
<?php } else {
	echo 'logged in';

} ?>

<?php
include("views/_footer.php");
?>





