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
                <div class="nav-btn">

                    <ul class="nav-list">
                        <li class="nav-item">

                            <a href="login and signup.php" class="login-btn"  id="login-btn"><i class="fa-solid fa-user"></i></a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="cart.php" class="nav-cart" id="cart-shop""><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>

        <section class="hero">
            <h4>ABOVE THE CLOUDS</h4>
            <h2>Wear your <span>best</span> <br> version</h2>
            <h6>From waste to wear, our innovative clothing features recycled fabrics</h6>
            <p>Save more with coupons & upto 50% off</p>
            <button onclick="window.location='shop.php'">Shop now</button>

        </section>
    </div>

    <section class="feature-product">
        <h2>Featured products</h2>
        <p>Check Out Our Prized Possessions</p>
        <div class="product-container">
            <div class="product">
                <img src="https://i.ibb.co/2N16zHr/TOO-HOT-TO-HANDLE-mockup-image.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Too Hot to Handle T-shirt</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 750</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>