<?php

require_once('..\Website\connection.php');

session_start();

if(isset($_POST['submit'])){
    $Username = mysqli_real_escape_string($conn, $_POST['username']);
    $Password = mysqli_real_escape_string($conn, ($_POST['password']));

    $sql = "SELECT * FROM admin WHERE username = '$Username' AND password = '$Password'";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $Username, $Password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(empty($Username) || empty($Password)){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Please Fill In The Blanks")';  
        echo '</script>';
    }
    elseif(mysqli_num_rows($result) > 0){
        header('location:..\Website\admin.php');
    }
    else{
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Incorrect Username or Password")';  
        header('location:..\Website\error.php');
        echo '</script>';
    }

    mysqli_stmt_close($stmt);
}
elseif(isset($_POST['submit2'])){
    $Username = mysqli_real_escape_string($conn, $_POST['username']);
    $Password = mysqli_real_escape_string($conn, ($_POST['password']));

    $sql = "SELECT * FROM user WHERE username = '$Username' AND password = '$Password'";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $Username, $Password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(empty($Username) || empty($Password)){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Please Fill In The Blanks")';  
        echo '</script>';
    }
    elseif(mysqli_num_rows($result) > 0){
        header('location:..\Website\welcome.php');
    }
    else{
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Incorrect Username or Password")';  
        header('location:..\Website\error.php');
        echo '</script>';
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);

?>