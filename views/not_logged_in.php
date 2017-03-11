  <form method="post" action="index.php" name="loginform">   

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Sign In</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">

    <div class="form-group">
    <label for="user_name">Email</label>
        <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
        <input tabindex="1" id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9-@-.]{2,64}" name="user_name" required />
      </div>
     </div>

      <div class="form-group" style="margin-top: -8px;">
      <label for="user_password">Password <a tabindex="6" style="font-size: 11px;font-style: italic;" href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a></label>
        <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-lock" style="margin-right: 1px;" aria-hidden="true"></i></div>
        <input tabindex="2" id="user_password" class="form-control" type="password" name="user_password" autocomplete="off" required />
      </div>
     </div>

 <label style="margin-top:6px;" class="custom-control custom-checkbox">
  <input tabindex="3" type="checkbox" id="user_rememberme" name="user_rememberme" value="1" class="custom-control-input">
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description"><?php echo WORDING_REMEMBER_ME; ?></span>
</label>

           </div>
       <div class="modal-footer">
<a href="register.php" tabindex="5" class="btn btn-secondary" role="button"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
         <button tabindex="4" type="submit" name="login" class="btn btn-success">Sign In</button>
       </div>




     </div>
   </div>
 </div>

</form>
