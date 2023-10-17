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
    <title>Traditional Wear</title>
    <link rel="icon" type="image/x-icon" href=".\Img\favicon.ico">


<script src="https://kit.fontawesome.com/98e008cd61.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css\shop_style.css">
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
        <div class="logo-container">            
            <div class="dropdown">
                <button class="dropbtn"><i class="fa-solid fa-list"></i></button>
                <div class="dropdown-content">

                    <a href="#">Men's Collection:</a>
                    <a href="t-shirts.php"><h6>T-shirts</h6></a>
                    <a href="shirts.php"><h6>Shirts</h6></a>
                    <a href="pants.php"><h6>Pants & Trousers</h6></a>
                    <a href="blazers.php"><h6>Blazers</h6></a>

                    
                    <a href="#">Women's Collection:</a>
                    <a href="outfits.php"><h6>Outfits</h6></a>
                    <a href="jeans.php"><h6>Jeans & Trousers</h6></a>
                    <a href="tops.php"><h6>Tops</h6></a>
                    <a href="trad-wear.php"><h6>Traditional Wear</h6></a>

                    <a href="#">Kid's Collection:</a>
                    <a href="onesies.php"><h6>Baby Onesies & Rompers</h6></a>
                    <a href="outwears.php"><h6>Todler's Outwear</h6></a>
                    <a href="apparels.php"><h6>Kid's Apparel</h6></a>

                    <a href="#">Winter Collection:</a>
                    <a href="hoodies.php"><h6>Hoodies</h6></a>
                    <a href="sweaters.php"><h6>Sweaters & Sweatshirts</h6></a>
                    <a href="jackets.php"><h6>Jackets</h6></a>
                    <a href="turtles.php"><h6>Turtlenecks</h6></a>

                </div>
            </div>

            <a href="index.php" class="nav-logo">
                <i class="fa-solid fa-vest-patches"></i> Trendy Threads
            </a>
        </div>

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

    <section class="shopbanner-8">
    </section>

    <section class="shop-product">
        <h2>Timeless Sarees & Salwar Kameez</h2>
        <p>Discover Elegance Woven in Every Drape</p>
        <div class="product-container">
            <div class="product">
                <img src=".\Img\salwar-1.jpg" alt="">
                <div class="description">
                    <h5><span>Women's Kurti with Pants</span> - Sky Blue</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 3300</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src=".\Img\salwar-2.jpg" alt="">
                <div class="description">
                    <h5><span>Women's Kurti with Cream Trousers</span> - Navy Blue</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 3500</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src=".\Img\salwar-3.jpg" alt="">
                <div class="description">
                    <h5><span>Women's Embroidered Kurti with Pants</span> - White</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 3800</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src=".\Img\salwar-4.jpg" alt="">
                <div class="description">
                    <h5><span>Women's Three-piece </span>- Powder Blue</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 4000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src=".\Img\salwar-5.jpg" alt="">
                <div class="description">
                    <h5><span>Women's Kurti with Pants</span> - Lavendar</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 4200</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
                    
            <div class="product">
                <img src=".\Img\salwar-6.jpg" alt="">
                <div class="description">
                    <h5><span>Women's Three-piece</span> - Lavendar</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 4500</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
            
            <div class="product">
                <img src=".\Img\saree-1.jpg" alt="">
                <div class="description">
     
                    <h5><span>Women's Saree</span> - Pink Shimmery</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 3300</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src=".\Img\saree-2.jpg" alt="">
                <div class="description">
     
                    <h5><span>Women's Saree</span> - Navy Blue</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 3000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
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