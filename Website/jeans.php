<?php
    include("..\Website\connection.php");
     session_start ();  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeans</title>
    <link rel="icon" type="image/x-icon" href="..\Img\favicon.ico">

    <script src="https://kit.fontawesome.com/98e008cd61.js" crossorigin="anonymous"></script>
    <script src="cart-container.js"></script>

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
        <h2>Denim Delights</h2>
        <p>Elevate Your Style with Classic Jeans</p>
        <div class="product-container">
            <div class="product">
                <img src="../Img/lad-jeans-2.jpg" alt="">
                <div class="description">
                <h5><span>Womens Wide Legged Denim Jeans</span> - Denim</h5>

                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>

                <h4>BDT. 1600</h4>
                </div>

                <button name="add-to-cart-btn" id="openContainerBtn"><i class="fa-solid fa-cart-plus"></i></button>

                <div class="cart-container" style="display: none;">
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                    const openContainerBtn = document.querySelector('#openContainerBtn');
                    const cartContainer = document.querySelector('.product-container .cart-container');

                    openContainerBtn.addEventListener('click', () => {
                        cartContainer.style.display = 'block'; // Show the container
                    });
                    });
                </script>

                <div class="product-details">
                            <?php
                            $sql = "SELECT * FROM products WHERE product_id = 10601";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                $product_name = $row["product_name"];
                                $product_price = $row["product_price"];
                                $img = $row["img"];
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>
                        </div>
                        <div class="user-details">
                        <label for="username">Enter Username:</label>
                        <input type="text" id="username" name="username" required>
                        </div>

                        <input type="hidden" id="product_id" value="10601">
                        <input type="hidden" id="product_name" value="<?php echo $product_name; ?>">

                        <div class="size-selection">
                            <label for="product_size">Select Size:</label>
                            <select id="product_size">
                            <option value="S">Small</option>
                            <option value="M">Medium</option>
                            <option value="L">Large</option>
                            <option value="XL">X-Large</option>
                            </select>
                        </div>

                        <div class="quantity-adjustment">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" min="1" value="1">
                        </div>

                        <form action="add-to-cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
                            <input type="hidden" name="product_size" value="<?php echo $product_size; ?>">
                            <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                            <input type="hidden" name="img" value="<?php echo $img; ?>">
                            <input type="hidden" name="username" value="<?php echo $username; ?>">
                            <input type="submit" value="Add to Cart">
                        </form>
                </div>
            </div>

            <div class="product">
                <img src="..\Img\lad-jeans-3.jpg" alt="">
                <div class="description">
                    <h5><span>Women's Wide Legged Jeans</span> - Black</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 1750</h4>
                </div>
                <a href="..\Website\cart.php"><i class="fa-solid fa-cart-plus"></i></a>
            </div>

            <div class="product">
                <img src="..\Img\lad-jeans-4.jpg" alt="">
                <div class="description">
                    <h5><span>Women's Flare Jeans </span>- Blue</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 1800</h4>
                </div>
                <a href="..\Website\cart.php"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
                    
            <div class="product">
                <img src="..\Img\lad-jeans-5.jpg" alt="">
                <div class="description">
     
                    <h5><span>Women's Formal Pants </span>- Black</h5>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT. 2000</h4>
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