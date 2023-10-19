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

    <section class="shopbanner">
        <h1>Looking for something to buy?</h1>
        <h2>Have a <span> Look! </span></h2>
    </section>

    <section class="feature-product">
        <h2>Men's Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
            <a href="t-shirts.php"><img src=".\Img\tshirts.jpg" alt=""></a>
                <div class="description">
                    <a href="t-shirts.php">T-shirts</a>
                </div>
            </div>
            
            <div class="product">
            <a href="shirts.php"><img src=".\Img\shirts.jpg" alt=""></a>
                <div class="description">
                    <a href="shirts.php">Shirts</a>
                </div>
            </div>
                        
            <div class="product">
            <a href="pants.php"><img src=".\Img\pants.jpg" alt=""></a>
                <div class="description">
                    <a href="pants.php">Pants & Trousers</a>
                </div>
            </div>
            
            <div class="product">
            <a href="blazers.php"><img src=".\Img\blazers.jpg" alt=""></a>
                <div class="description">
                   <a href="blazers.php">Blazers</a>
                </div>
            </div>

            
    </section>
       
    
    <section class="feature-product">
        <h2>Women's Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
            <a href="outfits.php"><img src=".\Img\womens-dress.jpg" alt=""></a>
                <div class="description">
                    <a href="outfits.php">Outfits</a>
                </div>
            </div>
            <div class="product">
            <a href="jeans.php"><img src=".\Img\jeans.jpg" alt=""></a>
                <div class="description">
                <a href="jeans.php">Jeans & Trousers</a>
                </div>
            </div>
            <div class="product">
            <a href="tops.php"><img src=".\Img\womens-tops.jpg" alt=""></a>
                <div class="description">
                <a href="tops.php">Tops</a>
                </div>
            </div>
            <div class="product">
            <a href="trad-wear.php"><img src=".\Img\trad-wear.jpg" alt=""></a>
                <div class="description">
                <a href="trad-wear.php">Traditional Wear</a>
                </div>
            </div>
    </section>
        
    <section class="feature-product">
        <h2>Kid's Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
            <a href="onesies.php"><img src=".\Img\onesies.jpg" alt=""></a>
                <div class="description">
                <a href="onesies.php">Baby Onesies</a>
                </div>
            </div>
            <div class="product">
            <a href="outwears.php"><img src=".\Img\kids-hoodie.jpg" alt=""></a>
                <div class="description">
                <a href="outwears.php">Toddler's Outwear</a>
                </div>
            </div>
            <div class="product">
            <a href="apparels.php"><img src=".\Img\kids-tshirts.jpg" alt=""></a>
                <div class="description">
                <a href="apparels.php">Kids' Apparel</a>
                </div>
            </div>
    </section>

    <section class="feature-product">
        <h2>Winter Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
            <a href="hoodies.php"><img src=".\Img\hoodies cat.jpg" alt=""></a>
                <div class="description">
                <a href="hoodies.php">Hoodies</a>  
                </div>
            </div>
            <div class="product">
            <a href="sweaters.php"><img src=".\Img\sweatshirt-cat.jpg" alt=""></a>
                <div class="description">
                <a href="sweaters.php">Sweatshirts</a>  
                </div>
            </div>
            <div class="product">
            <a href="jackets.php"><img src=".\Img\jackets-cat.jpg" alt=""></a>
                <div class="description">
                <a href="jackets.php">Jackets</a>  
                 </div>
            </div>
            <div class="product">
            <a href="turtles.php"><img src=".\Img\turtle-cat.jpg" alt=""></a>
                <div class="description">
                <a href="turtles.php">Turtleneck Sweaters</a>  
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