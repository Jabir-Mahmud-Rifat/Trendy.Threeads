<?php

  // database connection  
  $conn = mysqli_connect('localhost', 'root', '', 'updated_cse299') or die('connection failed');

  if(!$conn){
    echo 'plese check your database ';
  }
 
?>