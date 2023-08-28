<?php
    include("connection.php");
     session_start ();  
    // echo "Welcome  ". $_SESSION['username'] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail Club - Home</title>

    <script src="https://kit.fontawesome.com/98e008cd61.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <div class="self">
        <header class="header" id="header-index">
            <nav class="nav container">
                <a href="index.php" class="nav-logo">
                    <i class="fa-solid fa-vest-patches"></i> Retail Club
                </a>

                <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="shop.php" class="nav-link">Shop</a>
                        </li>

                        <li class="nav-item">
                            <a href="cart.php" class="nav-link">Cart</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.php" class="nav-link">About</a>
                        </li>

                        <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>