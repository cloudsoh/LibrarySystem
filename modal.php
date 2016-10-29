         
<!--login-user-modal-->
  <div class="modal fade" id="login-form-modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h4 class="modal-title">Sign In</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="login.php" id="login-form" name="login-form">
            <div class="form-group">
              <label for="log-name" class="control-label col-md-2">Username: </label>
              <div class="col-md-10">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-user fa-fw"></span></span>
                  <input class="form-control" type="text" id="log-name" name="html_username" placeholder="Username" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="log-pass" class="control-label col-md-2">Password: </label>
              <div class="col-md-10">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-key fa-fw"></span></span>
                  <input class="form-control" type="password" id="log-pass" name="html_password" placeholder="Password" required >
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info" form="login-form">Sign In</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>  
  </div>
  <!--sign-up-modal-->
  <div class="modal fade" id="signup-form-modal" tabindex="-2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="register.php" id="signup-form" name="signup-form">
            <div class="form-group">
              <label for="username" class="control-label col-md-2">Username&nbsp;<span style="color: red;">*</span>: </label>
              <div class="col-md-10">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-user fa-fw"></span></span>
                  <input type="text" class="form-control" id="username" name="html_username">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="control-label col-md-2">Name&nbsp;<span style="color: red;">*</span>: </label>
              <div class="col-md-10">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-tag fa-fw"></span></span>
                  <input type="text" class="form-control" id="name" name="html_name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="control-label col-md-2">Password&nbsp;<span style="color: red;">*</span>: </label>
              <div class="col-md-10">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-key fa-fw"></span></span>
                  <input type="password" class="form-control" id="password" name="html_password">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="control-label col-md-2">Email&nbsp;<span style="color: red;">*</span>: </label>
              <div class="col-md-10">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-envelope fa-fw"></span></span>
                  <input type="email" class="form-control" id="email" name="html_email">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="gender" class="control-label col-md-2">Gender&nbsp;<span style="color: red;">*</span>: </label>
              <div class="col-md-10">
                <label class="radio-inline">
                  <input type="radio" name="html_gender" id="gender" value="Male">Male
                </label>
                <label class="radio-inline">
                  <input type="radio" name="html_gender" id="gender" value="Female">Female
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <span style="color: red;">* is require to fill.</span>
          <button type="submit" class="btn btn-info" form="signup-form">Sign Up</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>