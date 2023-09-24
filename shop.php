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
    <title>Trendy Threads | Shop</title>

    <script src="https://kit.fontawesome.com/98e008cd61.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css\shop_style.css">
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav-logo">
                <i class="fa-solid fa-vest-patches"></i> Trendy Threads
            </a>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="shop.php" class="nav-link active">Shop</a>
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
                        <a href="login and signup.php" class="login-btn" id="login-btn"><i class="fa-solid fa-user"></i></a>
                    </li>

                    <li class="nav-item">
                         <a href="cart.php" class="nav-cart" id="cart-shop"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li class="nav-item">
                    <form class="search" action="search.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </li>

                </ul>

            </div>
        </nav>
    </header>

    <section class="shopbanner">
        <h1>Looking for something to buy?</h1>
        <h2>Have a <span> Look! </span></h2>
    </section>

    <section class="feature-product">
        <h2>Men's Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
                <img src="https://i.ibb.co/HpGPRTk/manushyan-tshirt-mydesignation-mockup-latest-image.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Manushyan T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/9pf6KvS/malayali-tshirt-mydesignation-mockup-image-latest-golden-1.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Malayali T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/VHj9KXb/theyyam-tshirt-mydesignation-image.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Theyyam T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/Y2qWWZW/pwoli-tshirt-mydesignation-image-latest.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Pwoli T-shirt</h5>
                </div>
            </div>
    </section>
       
    
    <section class="feature-product">
        <h2>Women's Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
                <img src="https://i.ibb.co/HpGPRTk/manushyan-tshirt-mydesignation-mockup-latest-image.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Manushyan T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/9pf6KvS/malayali-tshirt-mydesignation-mockup-image-latest-golden-1.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Malayali T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/VHj9KXb/theyyam-tshirt-mydesignation-image.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Theyyam T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/Y2qWWZW/pwoli-tshirt-mydesignation-image-latest.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Pwoli T-shirt</h5>
                </div>
            </div>
    </section>
        
    <section class="feature-product">
        <h2>Kid's Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
                <img src="https://i.ibb.co/HpGPRTk/manushyan-tshirt-mydesignation-mockup-latest-image.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Manushyan T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/9pf6KvS/malayali-tshirt-mydesignation-mockup-image-latest-golden-1.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Malayali T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/VHj9KXb/theyyam-tshirt-mydesignation-image.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Theyyam T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/Y2qWWZW/pwoli-tshirt-mydesignation-image-latest.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Pwoli T-shirt</h5>
                </div>
            </div>
    </section>

    <section class="feature-product">
        <h2>Winter Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
                <img src="https://i.ibb.co/HpGPRTk/manushyan-tshirt-mydesignation-mockup-latest-image.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Manushyan T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/9pf6KvS/malayali-tshirt-mydesignation-mockup-image-latest-golden-1.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Malayali T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/VHj9KXb/theyyam-tshirt-mydesignation-image.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Theyyam T-shirt</h5>
                </div>
            </div>
            <div class="product">
                <img src="https://i.ibb.co/Y2qWWZW/pwoli-tshirt-mydesignation-image-latest.jpg" alt="">
                <div class="description">
                    <span>Unisex T-shirts</span>
                    <h5>Pwoli T-shirt</h5>
                </div>
            </div>
    </section>
 

    <!-- footer section -->
    <footer>
        <h3>Trendy Threads</h3>
        <p>For more information on us,<br> please follow the links below</p>

        <div class="socials">
            <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-behance" target="_blank"></i></a>
            <a href="#"><i class="fa-brands fa-artstation" target="_blank"></i></a>
        </div>

        <h6>© 2023 Trendy Threads - All Rights Reserved</h6>
    </footer>
    
</body>
</html>