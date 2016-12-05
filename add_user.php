<?php


require_once('Database_Connection.php');

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

      
      $id = test_input($_POST["id_num"]);
      $first = test_input($_POST["f_name"]);
      $last = test_input($_POST["l_name"]);
      $uname = test_input($_POST["u_name"]);
      $pass= test_input($_POST["p_word"]);
      $type = test_input($_POST["u_type"]);
      
      $hashed_p=md5($pass.time());
      
    
    try{
    
    $sql = "INSERT INTO User (id, firstname, lastname, username, password, user_type)
    VALUES ('$id', '$first', '$last', '$uname','$hashed_p','$type')";
    
    
    
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    $conn = null;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


      
      
  
  

   
}


?>