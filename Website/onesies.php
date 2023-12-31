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
    <title>Baby Onesies</title>
    <link rel="icon" type="image/x-icon" href="..\Img\favicon.ico">


<script src="https://kit.fontawesome.com/98e008cd61.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="..\css\shop_style.css">

</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
        <div class="logo-container">            
        <div class="dropdown">
                <button class="dropbtn"><i class="fa-solid fa-list"></i></button>
                <div class="dropdown-content">

                    <a href="#">Men's Collection:</a>
                    <a href="..\Website\t-shirts.php"><h6>T-shirts</h6></a>
                    <a href="..\Website\shirts.php"><h6>Shirts</h6></a>
                    <a href="..\Website\pants.php"><h6>Pants & Trousers</h6></a>
                    <a href="..\Website\blazers.php"><h6>Blazers</h6></a>
                    
                    <a href="#">Women's Collection:</a>
                    <a href="..\Website\outfits.php"><h6>Outfits</h6></a>
                    <a href="..\Website\jeans.php"><h6>Jeans & Trousers</h6></a>
                    <a href="..\Website\tops.php"><h6>Tops</h6></a>
                    <a href="..\Website\trad-wear.php"><h6>Traditional Wear</h6></a>

                    <a href="#">Kid's Collection:</a>
                    <a href="..\Website\onesies.php"><h6>Baby Onesies & Rompers</h6></a>
                    <a href="..\Website\outwears.php"><h6>Todler's Outwear</h6></a>
                    <a href="..\Website\apparels.php"><h6>Kid's Apparel</h6></a>

                    <a href="#">Winter Collection:</a>
                    <a href="..\Website\hoodies.php"><h6>Hoodies</h6></a>
                    <a href="..\Website\sweaters.php"><h6>Sweaters & Sweatshirts</h6></a>
                    <a href="..\Website\jackets.php"><h6>Jackets</h6></a>
                    <a href="..\Website\turtles.php"><h6>Turtlenecks</h6></a>

                </div>
            </div>

            <a href="..\Website\index.php" class="nav-logo">
                <i class="fa-solid fa-vest-patches"></i> Trendy Threads
            </a>
        </div>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="..\Website\index.php" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="..\Website\shop.php" class="nav-link active">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a href="..\Website\about.php" class="nav-link">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="..\Website\contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="nav-btn">

                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="..\Website\login and signup.php" class="login-btn" id="login-btn"><i class="fa-solid fa-user"></i></a>
                    </li>

                    <li class="nav-item">
                         <a href="..\Website\cart.php" class="nav-cart" id="cart-shop"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>

                    <li class="nav-item">
                    <form class="search" action="..\Website\search.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </li>
                  

                </ul>

            </div>
        </nav>
    </header>

    <section class="shop-product">
        <h2>Infant Playtime Picks</h2>
        <p>Onesies for your new-borns!</p>
        <div class="product-container">
            <div class="product">
                <img src="..\Img\onesies-1.jpg" alt="">
                <div class="description">
                    <h5><span>Baby Onesies </span>- Grey</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 500</h4>
                </div>
               <a href="..\Website\cart.php"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src="..\Img\onesies-2.jpg" alt="">
                <div class="description">
                    <h5><span>Baby Onesies </span>- Black</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 550</h4>
                </div>
               <a href="..\Website\cart.php"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src="..\Img\onesies-3.jpg" alt="">
                <div class="description">
                    <h5><span>Baby Onesies </span>- White</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 600</h4>
                </div>
               <a href="..\Website\cart.php"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src="..\Img\onesies-4.jpg" alt="">
                <div class="description">
                    <h5><span>Baby Onesies Mixed Set</span>- White, Brown & Beige</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 2200</h4>
                </div>
               <a href="..\Website\cart.php"><i class="fa-solid fa-cart-plus"></i></a>
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

</html>