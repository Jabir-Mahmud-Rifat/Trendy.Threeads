

<?php

require_once('connection.php');  // database connection

session_start() ; //  code for connecting next page



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Landing Page</title>
    <link rel=" stylesheet " href= "CSS\styles.css" >
</head>
<body>
    <header>
        <h1>Welcome to Our Landing Page</h1>
        <p>Your message or call to action goes here.</p>
    </header>

    <section class="features">
        <div class="feature">
            <h2>Feature 1</h2>
            <p>Description of feature 1.</p>
        </div>
        <div class="feature">
            <h2>Feature 2</h2>
            <p>Description of feature 2.</p>
        </div>
        <div class="feature">
            <h2>Feature 3</h2>
            <p>Description of feature 3.</p>
        </div>
    </section>

    <section class="cta">
        <h2>Sign Up Now!</h2>
        <p>Don't miss out on our amazing product. Join us today!</p>
        <a href="#" class="btn">Sign Up</a>
    </section>

    <footer>
        <p>&copy; 2023  All rights reserved to Trendy Threads</p>
    </footer>
</body>
</html>
