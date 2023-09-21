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
                <i class="fa-solid fa-vest-patches"></i> Retail Club
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
                        <a href="cart.php" class="nav-link active">Cart</a>
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
                        <a href="cart.php" class="nav-cart" id="cart-shop""><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <section class="banner">
        <h2>Let's <span> Review</span> your cart</h2>
        <p style="padding-bottom: 10px">Wanna shop more?</p>
        <button onclick="window.location='shop.php'">Explore</button>
    </section>

    <section class="cart">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Product</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
                <tbody>
                    <tr>
                        <td><a href=""><i class="fa-solid fa-circle-xmark"></i></a></td>
                        <td><img src="https://i.ibb.co/Y2qWWZW/pwoli-tshirt-mydesignation-image-latest.jpg" alt=""></td>
                        <td>Pwoli T-shirt</td>
                        <td>BDT. 850</td>
                        <td><input type="number" value="1"></td>
                        <td>BDT. 850</td>
                    </tr>
                    <tr>
                        <td><a href=""><i class="fa-solid fa-circle-xmark"></i></a></td>
                        <td><img src="https://i.ibb.co/VHj9KXb/theyyam-tshirt-mydesignation-image.jpg" alt=""></td>
                        <td>Theyyam T-shirt</td>
                        <td>BDT. 950</td>
                        <td><input type="number" value="1"></td>
                        <td>BDT. 950</td>
                    </tr>
                    <tr>
                        <td><a href=""><i class="fa-solid fa-circle-xmark"></i></a></td>
                        <td><img src="https://i.ibb.co/vjHxhMq/kgf-tshirt-mockup.jpg" alt=""></td>
                        <td>KGF Rules T-shirt</td>
                        <td>BDT. 820</td>
                        <td><input type="number" value="1"></td>
                        <td>BDT. 820</td>
                    </tr>
                    
                </tbody>
            </thead>
        </table>
    </section>

    <section class="cart-add">
        <div class="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>BDT. 2620</td>
                </tr>
                <tr>
                    <td>Shipping Charge</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><Strong>Total</Strong></td>
                    <td><Strong>BDT. 2620</Strong></td>
                </tr>
            </table>

            <button onclick="window.location='shop.php'">Checkout</button>
        </div>
    </section>

    <!-- footer section -->
    <footer>
        <h3>Retail Club</h3>
        <p>For more information on us,<br> please follow the links below</p>

        <div class="socials">
            <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-behance" target="_blank"></i></a>
            <a href="#"><i class="fa-brands fa-artstation" target="_blank"></i></a>
        </div>

        <h6>© 2022 Retail Club - All Rights Reserved</h6>
    </footer>
    
</body>
</html>