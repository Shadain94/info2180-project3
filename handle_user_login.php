<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
<?php
require('Database_Connection.php');


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

      
      $uname = test_input($_POST["uname"]);
      $password = test_input($_POST["pword"]);
      $_SESSION['Current_user']=$uname;
      
      $sql = "SELECT user_id FROM User WHERE User.username='$uname' and User.password='$password';";
       
      $result = $conn->query($sql);
        foreach ($result as $row) {
            
        if (!empty($row['user_id'])) {
            
           include_once('user_login_home.php');
           
          return false;
          
        }
        
        
        
      }
      
  
  

   
}
 ?>
        <h2> No such User in the Database check your user name and password again!</h2>
        
        
    </body>
    
</html>