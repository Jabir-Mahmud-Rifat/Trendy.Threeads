<?php

require_once('..\Website\connection.php');

 //code for connecting next page
session_start ();



if(isset($_POST['submit'])){

  $Username = mysqli_real_escape_string($conn, $_POST['username']);
  $Password= mysqli_real_escape_string($conn, ($_POST['password']));    //($conn, md5($_POST['password']))

  $select = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$Username'  And password ='$Password'") or die('query failed');

  if(empty($Username) || empty($Password)){
   echo '<script type ="text/JavaScript">';  
   echo 'alert("Please Fill In The Blanks")';  
   echo '</script>';
  }
  elseif(mysqli_num_rows($select) > 0){
    $row = mysqli_fetch_assoc($select);


    //header('location:welcome.php');
    header('location:..\Website\index.php   ');      // welcome.php  //landingpage.php
  }
  else{
   echo '<script type ="text/JavaScript">';  
   echo 'alert("Incorrect Username or Password")';  
   header('location:..\Website\error.php'); // have to fix this partr

   echo '</script>';
  }
}

?>