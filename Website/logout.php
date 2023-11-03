<?php
// Initialize the session
session_start();

// Check if the user is logged in, if yes then log him out
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    // Remove all session variables
    session_unset();

    // Destroy the session.
    session_destroy();

    // Redirect to login page
    header("location: ..\Website\login and signup.php");
    exit;
}
?>