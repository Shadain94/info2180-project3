<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Administrator Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <script type="text/javascript" src="help.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

 

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" id="tricky">Welcome Back <?php if (isset($_SESSION['Current_user'])) {
                  echo $_SESSION['Current_user'];
                }else{
                        echo"You must be Logged in to View this Page";
                
                }  ?> </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Menu <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                   
                        <li class="divider"></li>
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>      

    </div>
    
    

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cheapo Mail Service User Creation Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_num">User Id #:</label>  
  <div class="col-md-4">
  <input id="id_num" name="id_num" type="text" placeholder="620073652" class="form-control input-md" required>
  <span class="help-block">must be at least 8 char long</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="f_name">First Name:</label>  
  <div class="col-md-4">
  <input id="f_name" name="f_name" type="text" placeholder="Jane" class="form-control input-md" required>
  <span class="help-block">enter first name</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="l_name">Last Name:</label>  
  <div class="col-md-4">
  <input id="l_name" name="l_name" type="text" placeholder="Doe" class="form-control input-md" required>
  <span class="help-block">enter last name</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="u_name">User Name:</label>  
  <div class="col-md-4">
  <input id="u_name" name="u_name" type="text" placeholder="JaneD94" class="form-control input-md" required>
  <span class="help-block">enter  whatever username </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="u_type">User Type:</label>  
  <div class="col-md-4">
  <input id="u_type" name="u_type" type="text" placeholder="user or admin" class="form-control input-md" required>
  <span class="help-block">type user or admin</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="p_word">Password:</label>  
  <div class="col-md-4">
  <input id="p_word" name="p_word" type="text" placeholder="Janedoe81" class="form-control input-md" required>
  <span class="help-block">enter password in correct format</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit_btn">Submission:</label>
  <div class="col-md-4">
    <button id="submit_btn" name="submit_btn" class="btn btn-danger">Click to Submit to Database</button>
  </div>
</div>

</fieldset>
</form>

   
<div id=confirm>
  
  
  
</div>

   

</body>

</html>
