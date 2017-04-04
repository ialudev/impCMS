<?php
include("cassiopeia/config.php");
include("views/_header.php");
?>


<!-- Content 1 -->
<?php

if(isset($_POST['submit'])){

	if(isset($_POST['g-recaptcha-response']))
          $captcha=$_POST['g-recaptcha-response'];

        if(!$captcha){
          echo '<div class="warningboxup">Wrong Captcha</div>';
          exit;
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcVoB0TAAAAADivlJAomzCN7KLatoJDXa3ymVZ9&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
          echo '<div class="warningboxup">Wrong Captcha</div>';
        }
        else
        {
          echo '<div class="warningboxup">Nice</div>';
        }

	if(strlen($_POST['username']) < 3){
		$error1[] = 'Username too short';
	} elseif(strpos($_POST['username'],"<")!==false) {
					$error1[] = 'Invalid';
		}
		 else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error1[] = 'Username is already taken';
		}

	}

	if(strlen($_POST['password']) < 3){
		$error1[] = 'Password too short';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error1[] = 'Password repeat too short';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error1[] = 'Password does not match';
	}

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error1[] = 'Please insert a correct E-Mail address';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error1[] = 'E-Mail is already taken';
		}

	}



	if(!isset($error1)){

		//Passworthash
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		//create the activasion code
		$activasion = "Yes";

		try {

			//Datenbank
			$stmt = $db->prepare('INSERT INTO `members` (`username`,`password`,`email`,`active`) VALUES (:username, :password, :email, :active)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion
			));
			$id = $db->lastInsertId('memberID');

			//Weiterleitung
			header('Location: register.php?action=joined');
			exit;

		} catch(PDOException $e) {
		    $error1[] = $e->getMessage();
		}

	}

}

?>

<?php if(!$user->is_logged_in() ) { ?>
zre
			<form role="form" method="post" action="" autocomplete="off">

				<?php
				//check for any errors
				if(isset($error1)){
					foreach($error1 as $error1){
						echo '<div class="warningboxup">'.$error1.'</div>';
					}
				}

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'joined'){ ?>

                <div id="warnerror1">Account successfully created!</div>
	<?php
				}
				?>


					<input id="username-register" type="text" name="username" id="username" class="mdl-textfield__input"  value="<?php if(isset($error1)){ echo $_POST['username']; } ?>" tabindex="1" pattern="[A-Z,a-z,1-9,_, ]*">
                        

                       
					<input  id="email-register" type="email" name="email" id="email" class="mdl-textfield__input" value="<?php if(isset($error1)){ echo $_POST['email']; } ?>" tabindex="2">
	

                   
							<input id="password-register" type="password" name="password" id="password" class="mdl-textfield__input"  tabindex="3">


                 
							<input  id="password-register-repeat" type="password" name="passwordConfirm" id="passwordConfirm" class="mdl-textfield__input" tabindex="4">
                            
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="g-recaptcha" data-sitekey="6LcVoB0TAAAAAIRZIFqWu2y28XKpyvKyTfpEiDnr"></div>


				<input id="demo-show-toast" class="mdl-button mdl-js-button mdl-button--raised" type="submit" name="submit" value="Create" class="buttonregi" tabindex="5">

			</form>

<?php } else {
	echo 'logged in';
	} ?>

<?php
include("views/_footer.php");
?>

