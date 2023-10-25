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
    <title>Trendy Threads - Home</title>
    <link rel="icon" type="image/x-icon" href="..\Img\favicon.ico">

    <script src="https://kit.fontawesome.com/98e008cd61.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="..\css\style.css">
    
</head>
<body>
    <div class="self">
        <header class="header" id="header-index">
            <nav class="nav container">
                <a href="..\Website\index.php" class="nav-logo">
                    <i class="fa-solid fa-vest-patches"></i> Trendy Threads
                </a>

                <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                        <li class="nav-item">
                            <a href="..\Website\index.php" class="nav-link active">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="..\Website\shop.php" class="nav-link">Shop</a>
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

                            <a href="..\Website\login and signup.php" class="login-btn"  id="login-btn"><i class="fa-solid fa-user"></i></a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="..\Website\cart.php" class="nav-cart" id="cart-shop""><i class="fa-solid fa-cart-shopping"></i></a>
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
            <button onclick="window.location='..\Website\shop.php'">Shop now</button>

        </section>
    </div>

    <section class="feature-product">
        <h2>Featured products</h2>
        <p>Check Out Our Prized Possessions</p>
        <div class="product-container">
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

            <div class="product">
                <img src="..\Img\pants-3.jpg" alt="">
                <div class="description">
                    <h5><span>Men's Cargo Pants</span> - Denim Blue</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 1300</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src="..\Img\blazer-4.jpg" alt="">
                <div class="description">
                    <h5><span>Men's Formal Blazer</span>- Black</h5>
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
                <img src="..\Img\w-shirt-1.jpg" alt="">
                <div class="description">
                    <h5><span>Half-sleeve Crop Shirt </span>- Light Green</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 700</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src="..\Img\jumpsuit-2.jpg" alt="">
                <div class="description">
                    <h5><span>Black Jumpsuit</span>- Black</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 1850</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src="..\Img\jumpsuit-3.jpg" alt="">
                <div class="description">
                    <h5><span>Yellow Jumpsuit</span>- Yellow</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 2000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src="..\Img\jackets-6.jpg" alt="">
                <div class="description">
     
                    <h5><span>Women's Leather Jacket</span> - Beige</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 7000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

        </div>
    </section>

    <section class="banner">
        <h4>We Create Quality</h4>
        <h2>Up to <span>50% off</span> - on All T-shirts and Accessories</h2>
        <button onclick="window.location='..\Website\shop.php'">Explore More</button>
    </section>

    <section class="feature-product">
        <h2>New Arrivals</h2>
        <p>We Proudly Present Our New Stock</p>
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
        </div>
        </div>
    </section>

    <section class="sm-banner">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>Buy 1 get 1 Free</h2>
            <span>The Best T-shirts You Can Find</span>
            <button>Learn More</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>Our Collection</h4>
            <h2>Check it out!</h2>
            <span>The Best T-shirts You Can Find</span>
            <button>Learn More</button>
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