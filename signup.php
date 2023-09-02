<?php

require_once('connection.php');

 //code for connecting next page
session_start ();


if(isset($_POST['submit'])){
     
  $Name = mysqli_real_escape_string($conn, $_POST['name']);
  $Username = mysqli_real_escape_string($conn, $_POST['username']);
  $Email = mysqli_real_escape_string($conn, $_POST['email']);
  $Password= mysqli_real_escape_string($conn, $_POST['password']);
  $CPassword= mysqli_real_escape_string($conn, $_POST['cpassword']);

  $select = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$Email' AND password = '$Password'") or die('query failed');

  if(empty($Username) || empty($Email) || empty($Password)){
    echo 'Please Fill In The Blanks';
  }
  elseif(mysqli_num_rows($select) > 0){
    echo 'User Already Exists';
  }
  else{
    if($Password != $CPassword){
      $message[] = 'Password Did Not Match';
    }
    else{
      $md5pass= md5($Password); //increpted the password
      $sql = "INSERT INTO admin(username, password, email, name) VALUES('$Username', '$md5pass', '$Email', '$Name')" ; //we want to see the pass so 
      //we use $Password in the query insted of $pass
      $insert = mysqli_query($conn, $sql) or die('query failed');

      if($insert){
        echo 'Signup Complete';
        header('location:index.php');
      }
      else{
        echo 'Signup Failed';
        header('location:login and signup.php');
      }
    }
  }
}



   
?>