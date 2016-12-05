<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> User Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="User.css" type="text/css" />
    
    <script type="text/javascript" src="help.js"></script>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id= "inside">
 <div id= left>  
<form class="form-horizontal" method="post" action="handle_user_login.php">
<fieldset>

<!-- Form Name -->
<legend>Login Here if You Already Have an Account</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uname">Username:</label>  
  <div class="col-md-4">
  <input id="uname" name="uname" type="text" placeholder="username" class="form-control input-md" required="">
  <span class="help-block">enter valid user name</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pword">Password:</label>
  <div class="col-md-4">
    <input id="pword" name="pword" type="password" placeholder="password" class="form-control input-md" required="">
    <span class="help-block">enter valid password</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit_btn"></label>
  <div class="col-md-4">
    <button id="submit_btn_user" name="submit_btn" class="btn btn-danger">Sign In</button>
  </div>
</div>

</fieldset>
</form>
</div>

<div id="option" >
    
    <h2> OR</h2>
</div>



<div id= right>  
<form class="form-horizontal" method="post" action="handle_admin_login.php">
<fieldset>

<!-- Form Name -->
<legend>Login Here if Your'e an Administrator</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uname_right">Username:</label>  
  <div class="col-md-4">
  <input id="uname_right" name="uname" type="text" placeholder="username" class="form-control input-md" required="">
  <span class="help-block">enter valid user name</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pword_right">Password:</label>
  <div class="col-md-4">
    <input id="pword_right" name="pword" type="password" placeholder="password" class="form-control input-md" required="">
    <span class="help-block">enter valid password</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit_btn_right"></label>
  <div class="col-md-4">
    <button id="submit_btn_right" name="submit_btn_right" class="btn btn-success">Sign In as Admin</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>

</div>
</body>
