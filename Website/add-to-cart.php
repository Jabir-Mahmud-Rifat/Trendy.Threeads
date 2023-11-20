<?php
include("connection.php");
session_start();

function filter_product_id($product_id) {
    return filter_var($product_id, FILTER_SANITIZE_NUMBER_INT);
  }
  
  function filter_product_name($product_name) {
    return filter_var($product_name, FILTER_SANITIZE_STRING);
  }
  
  function filter_img($img) {
    return filter_var($img, FILTER_SANITIZE_URL);
  }
  
  function filter_product_size($product_size) {
    return filter_var($product_size, FILTER_SANITIZE_STRING);
  }
  
  function filter_product_price($product_price) {
    return filter_var($product_price, FILTER_SANITIZE_NUMBER_FLOAT);
  }
  
  function filter_quantity($quantity) {
    return filter_var($quantity, FILTER_SANITIZE_NUMBER_INT);
  }
  
  function filter_username($username) {
    return filter_var($username, FILTER_SANITIZE_STRING);
  }
    
  if (isset($_POST['product_id'])) {
    $product_id = filter_product_id($_POST['product_id']);
    $product_name = filter_product_name($_POST['product_name']);
    $img = filter_img($_POST['img']);
    $product_size = filter_product_size($_POST['product_size']);
    $product_price = filter_product_price($_POST['product_price']);
    $quantity = filter_quantity($_POST['quantity']);
    $username = filter_username($_POST['username']);
  
    $total_price = $product_price * $quantity; // Calculate total price
  
    $insert_cart = $conn->prepare("INSERT INTO `cart`(product_id, product_name, img, product_size, product_price, quantity, total_price, username) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $insert_cart->execute([$product_id, $product_name, $img, $product_size, $product_price, $quantity, $total_price, $username]);
  
    $message[] = 'Added to cart!';
  }
?>



<!--
    $view_cart = $conn->prepare("SELECT * FROM `cart` WHERE username = ?");
    $view_cart->execute([$username]);

    $cart_items = $view_cart->fetch(MYSQLI_ASSOC);
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="icon" type="image/x-icon" href="..\Img\favicon.ico">

    <script src="https://kit.fontawesome.com/98e008cd61.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="..\css\style.css">
    
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="..\Website\index.php" class="nav-logo">
                <i class="fa-solid fa-vest-patches"></i> Trendy Threads
            </a>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="..\Website\index.php" class="nav-link">Home</a>
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
                        <a href="..\Website\login and signup.php" class="login-btn" id="login-btn"><i class="fa-solid fa-user"></i></a>
                    </li>

                    <li class="nav-item">
                        <a href="..\Website\cart.php" class="nav-cart" id="cart-shop"><i class="fa-solid fa-cart-shopping"></i></a>
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
                    <td>Unit Price</td>
                    <td>Size</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
                <tbody>
                    
                    
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
                    <td>BDT. </td>
                </tr>
                <tr>
                    <td>Shipping Charge</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><Strong>Total</Strong></td>
                    <td><Strong>BDT. </Strong></td>
                </tr>
            </table>

            <button onclick="window.location='payment.php'">Checkout</button>
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
