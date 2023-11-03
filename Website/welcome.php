

<?php

require_once('connection.php');  // database connection

session_start() ; //  code for connecting next page

if(isset($_SESSION['login_status']) && $_SESSION['login_status'] == 'success'){
 echo '<script type="text/javascript">alert("Welcome! Your login was successful.");</script>';
 unset($_SESSION['login_status']); // clear the session value to avoid multiple alerts
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Landing Page</title>
    <link rel=" stylesheet " href= "..\CSS\styles.css" >
</head>
<body>
    <header>
        <h1>Welcome to Trendy Threads</h1>
         <h2> Your sign up is Successful</h2>
        <p>Enjoy your Shopping with us</p>
    </header>

    <section class="features">
        <div class="feature">
            <h2>Discover your style</h2>
           
        </div>
        <div class="feature">
            <h2>Trust on quality</h2>
            
        </div>
        <div class="feature">
            <h2> shopping with Trendy Threads</h2>
          
        </div>
    </section>

    <section class="cta">
        <h2> </h2>    
                                
        <a href="index.php" class="btn"> Explore Trendy Threads </a>     <!--add index.php in btn to reach home page..-->
    </section>

    <footer>
        <p>&copy; 2023  All rights reserved to Trendy Threads</p>
    </footer>
</body>
</html>
