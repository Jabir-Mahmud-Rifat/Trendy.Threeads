<?php

  // database connection  
  $conn = mysqli_connect('localhost', 'root', '', 'cse299') or die('connection failed');

  if(!$conn){
    echo 'plese check your database ';
  }
 
?>