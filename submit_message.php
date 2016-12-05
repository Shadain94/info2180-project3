<?php
session_start();
require('Database_Connection.php');

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
  try{
      $subject = test_input($_POST["s_id"]);
      $recepient_id = test_input($_POST["r_id"]);
      $message = test_input($_POST["m_id"]);
      $user_id= "Dex-Factor";
      $date_sub= date('Y-m-d H:i:s');
      
       $sending = "INSERT INTO Message (id, recipient_id, user_id, subject, body, date_sent)
    VALUES ('$recepient_id', '$user_id', '$subject', '$message','$date_sub');";
    
    $conn->exec($sending);
    echo "New record created successfully";
    $conn = null;
      
      
  }catch(PDOException $e){
      
      
      echo "$sending";
      echo "Something in the try failed: " . $e->getMessage();
      
  }
      
      
      
      
      









?>