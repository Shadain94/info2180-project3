<?php
session_start();

?>



<html>
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
      
      
      $sql = "SELECT id FROM User WHERE User.username='$uname' and User.password='$password';";
       
      $result = $conn->query($sql);
        foreach ($result as $row) {
            
        if (!empty($row['id'])) {
            $_SESSION['Current_user']=$uname;
           include('usercreation_form.php');
          
          
           return false;
          
        }
        
        
        
      }
      
  
  

   
}



?>

     <h2 style="color:White;"> You must be Logged in to View this Page!</h2>
     <ol style="color:white;">
         <p> Please Check Your User name and Password Again</p>
          <p> OR</p>
          <p> Re- Login</p>
     </ol>
     

</body>
</html>