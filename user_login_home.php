<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        
    <title> User Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Custom CSS -->
    <link rel="stylesheet" href="special.css" type="text/css" />
    
    <script type="text/javascript" src="message.js"></script>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

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
                <a class="navbar-brand" href="#" id="tricky">Welcome Back <?php echo $_SESSION['Current_user']; ?>  </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="move"><i class="fa fa-user"></i> Menu <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                   
                        <li class="divider"></li>
                        <li>
                            <a href="index.php" <?php unset($_SESSION['Current_user']);  ?>><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>      

    </div>
    
    
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Message Users</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="s_id">Subject:</label>  
  <div class="col-md-4">
  <input id="s_id" name="s_id" type="text" placeholder="what's the topic" class="form-control input-md" required="">
  <span class="help-block"> E.g Lunch</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="r_id">Recepient:</label>  
  <div class="col-md-4">
  <input id="r_id" name="r_id" type="text" placeholder="Who to send it to?" class="form-control input-md" required="">
  <span class="help-block"> E.g Shadain94</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="m_id">Message:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="m_id" name="m_id">Type message here</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit_message"></label>
  <div class="col-md-4">
    <button id="submit_message" name="submit_message" class="btn btn-danger">Send Message to User</button>
  </div>
</div>

</fieldset>
</form>

</body>
    
    
    
    
    
</html>