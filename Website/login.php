<?php

require_once('..\Website\connection.php');

session_start();

if(isset($_POST['submit'])){
    $Username = mysqli_real_escape_string($conn, $_POST['username']);
    $Password = mysqli_real_escape_string($conn, ($_POST['password']));

    $sql = "SELECT * FROM user WHERE username = '$Username' AND password = '$Password'";
    $result = mysqli_query($conn, $sql);
    
    if(empty($Username) || empty($Password)){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Please Fill In The Blanks")';  
        echo '</script>';
    }
    elseif(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      header('location:..\Website\index.php');
    }
    else{
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Incorrect Username or Password")';  
        header('location:..\Website\error.php');
        echo '</script>';
    } 
}
elseif(isset($_POST['submit2'])){
    $Username = mysqli_real_escape_string($conn, $_POST['username']);
    $Password = mysqli_real_escape_string($conn, ($_POST['password']));

    $sql = "SELECT * FROM user WHERE username = '$Username' AND password = '$Password'";
    $result = mysqli_query($conn, $sql);

    if(empty($Username) || empty($Password)){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Please Fill In The Blanks")';  
        echo '</script>';
    }
    elseif(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);  
        header('location:..\Website\welcome.php');
    }
    else{
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Incorrect Username or Password")';  
        header('location:..\Website\error.php');
        echo '</script>';
    }
}

mysqli_close($conn);

?>