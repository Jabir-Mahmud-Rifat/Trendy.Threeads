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
    <title>Product</title>

    <script src="https://kit.fontawesome.com/98e008cd61.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css\style.css">
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
                        <a href="shop.php" class="nav-link">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link active">About</a>
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
                        <a href="#" class="nav-cart" id="cart-shop""><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <section class="banner">
        <h4>Our Journey</h4>
        <h2>Learn <span> More </span> About us</h2>
    </section>

    <section class="product-details" id="about">
        <img src="https://i.ibb.co/PWmbxh4/About-Us.jpg" id="main-img" width="100%" alt="">
        
        <div class="single-pro-details">
            <h2>We are...</h2>
            <h5></h5>
            <h2><span>Trendy </span> Threads</h2>

            <h4>A bunch of visionaries wanting your attention</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem voluptatibus esse ipsam nulla repellendus facilis, expedita hic, blanditiis nam accusantium ratione deleniti velit optio dicta veniam. Architecto porro nihil enim. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel amet dicta ducimus ipsum, libero sunt illum culpa provident, nihil voluptatum dignissimos quisquam facere vitae iusto quas blanditiis modi debitis? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt illo harum, nemo accusantium quo beatae cupiditate, dicta sapiente libero cumque dolor culpa veritatis, ipsam esse porro in unde itaque rem!</p>
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