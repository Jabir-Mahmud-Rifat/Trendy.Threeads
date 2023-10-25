<?php
    include("..\Website\connection.php");
     session_start ();  
    // echo "Welcome  ". $_SESSION['username'] ;  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shirts</title>

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
        <h2>Featured products</h2>
        <p>Check Out Our Prized Possessions</p>
        <div class="product-container">

            <div class="product">
                <img src="https://i.ibb.co/2N16zHr/TOO-HOT-TO-HANDLE-mockup-image.jpg" alt="">
                <div class="description">
                <h5><span>Too Hot to Handle T-shirt</span> - Black</h5>    
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 650</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
            
            <div class="product">
                <img src="https://i.ibb.co/GMCtkxx/foodie-tshirt-image-mydesignation-eat-at-trivandrum-C.jpg" alt="">
                <div class="description">
                    <h5><span>Foodie T-shirt</span> - Red</h5>  
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 675</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src="https://i.ibb.co/vjHxhMq/kgf-tshirt-mockup.jpg" alt="">
                <div class="description">
                <h5><span>KGF Rules T-shirt</span> - Black</h5> 
                        <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 720</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src="https://i.ibb.co/FVDnPz5/harry-potter-tshirt-glow-in-the-dark-mydesignation-mockup-glow.gif" alt="">
                <div class="description">
                <h5><span>Glow in the Dark T-shirt</span> - Black</h5> 
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 800</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
            
            <div class="product">
                <img src="..\Img\t-shirts-1.jpg" alt="">
                <div class="description">
                <h5><span>Airplane T-shirt</span> - Khaki</h5> 
                        <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 800</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
            <div class="product">
                <img src="..\Img\t-shirts-2.jpg" alt="">
                <div class="description">
                <h5><span>Solid T-shirt</span> - Olive Green</h5> 
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 870</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
            <div class="product">
                <img src="..\Img\t-shirts-3.jpg" alt="">
                <div class="description">
                <h5><span>Drop-shoulder T-shirt</span> - Navy Blue</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 950</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
            <div class="product">
                <img src="..\Img\t-shirts-4.jpg" alt="">
                <div class="description">
                <h5><span>AC/DC T-shirt</span> - Black</h5> 
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 950</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
            <div class="product">
                <img src="..\Img\polos-1.jpg" alt="">
                <div class="description">
                <h5><span>Men's Polo T-shirt</span> - Bottle Green</h5> 
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 950</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
            <div class="product">
                <img src="..\Img\polos-2.jpg" alt="">
                <div class="description">
                <h5><span>Men's Polo T-shirt</span> - Black</h5> 
                        <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 970</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
            <div class="product">
                <img src="..\Img\polos-3.jpg" alt="">
                <div class="description">
                <h5><span>Men's Polo T-shirt</span> - White</h5> 
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 1000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
            <div class="product">
                <img src="..\Img\polos-4.jpg" alt="">
                <div class="description">
                <h5><span>Men's Polo T-shirt</span> - Navy Blue</h5> 
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 1000</h4>
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