<?php include('_header.php'); ?>

<div class="container" style="margin-top:30px;">

    <div class="card">
  <div class="card-header">Create a new account</div>
  <div class="card-block">
<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
<form method="post" action="register.php" name="registerform">


    <div class="form-group">
       <label for="user_name"><?php echo WORDING_REGISTRATION_USERNAME; ?></label>
        <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
        <input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required aria-describedby="usernameHELP" placeholder="username">
      </div>
       <small id="usernameHELP" class="form-text text-muted">This name will be displayed</small>
     </div>

     <div class="form-group">
        <label for="user_email"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
         <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i>
</div>
         <input id="user_email" class="form-control" type="email" name="user_email" required aria-describedby="emailHELP" placeholder="email address">
       </div>
        <small id="emailHELP" class="form-text text-muted">You will need your email to recover your account</small>
      </div>

      <div class="form-group">
         <label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
          <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
          <input id="user_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="password">
        </div>
       </div>

       <div class="form-group">
           <div class="input-group">
           <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
           <input class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" required aria-describedby="passwordHELP" placeholder="repeat password">
         </div>
          <small id="passwordHELP" class="form-text text-muted">(Min. 6 characters) Please do not use your league of legends password</small>
        </div>

        <div class="form-group">
            <div class="input-group">
            <div class="input-group-addon"><img style="width: 75px;" src="tools/showCaptcha.php" alt="captcha" /></div>
            <input class="form-control" type="text" name="captcha" required autocomplete="off" placeholder="Please enter these characters">
          </div>
         </div>

    <button type="submit" name="register" value="<?php echo WORDING_REGISTER; ?>" class="btn btn-success">Create</button>
</form>
<?php } else {
  echo 'You can now log in.';
} ?>
</div>
</div>
</div>


<?php include('_footer.php'); ?>
