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
    <title>Trendy Threads | Shop</title>
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
                        <div class="user-down">
                        <button class="user-btn"><a href="..\Website\login and signup.php" class="login-btn" id="login-btn"><i class="fa-solid fa-user"></i></a></button>                     
                        <div class="user-content">
                            <a href="..\Website\user.php"><h6>My Profile</h6></a>
                            <a href="..\Website\orders.php"><h6>My Orders</h6></a>
                            <a href="..\Website\logout.php"><h6>Log out</h6></a>
                        </div>
                        </div>
                    </li>

                    <li class="nav-item">
                         <a href="..\Website\cart.php" class="nav-cart" id="cart-shop"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li class="nav-item">
                    <form class="search" action="..\Website\search.php" method='get'>
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
            <a href="..\Website\t-shirts.php"><img src="..\Img\tshirts.jpg" alt=""></a>
                <div class="description">
                    <a href="..\Website\t-shirts.php">T-shirts</a>
                </div>
            </div>
            
            <div class="product">
            <a href="..\Website\shirts.php"><img src="..\Img\shirts.jpg" alt=""></a>
                <div class="description">
                    <a href="..\Website\shirts.php">Shirts</a>
                </div>
            </div>
                        
            <div class="product">
            <a href="..\Website\pants.php"><img src="..\Img\pants.jpg" alt=""></a>
                <div class="description">
                    <a href="..\Website\pants.php">Pants & Trousers</a>
                </div>
            </div>
            
            <div class="product">
            <a href="..\Website\blazers.php"><img src="..\Img\blazers.jpg" alt=""></a>
                <div class="description">
                   <a href="..\Website\blazers.php">Blazers</a>
                </div>
            </div>

            
    </section>
  
    <div class="chatbot">
        <button id="chatButton" class="chat-button" onclick="openChat()">
            <img src="..\Img\chat-icon.png" alt="Chat Icon">
        </button>
        <div id="chatContainer" class="chat-container">
            <div class="chat-header">
                Chatbot
                <button id="closeChat" class="close-chat" onclick="closeChat()">X</button>
            </div>
            <div class="chat-body" id="chatBody">
                <p>Welcome! How can I assist you?</p>
            </div>
            <div class="chat-footer">
                <input type="text" id="userInput" placeholder="Type a message...">
                <button onclick="sendMessage()">Send</button>
            </div>
        </div>
        <script src="..\js\scripts.js"></script>

    </div>
    
       
    
    <section class="feature-product">
        <h2>Women's Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
            <a href="..\Website\outfits.php"><img src="..\Img\womens-dress.jpg" alt=""></a>
                <div class="description">
                    <a href="..\Website\outfits.php">Outfits</a>
                </div>
            </div>
            <div class="product">
            <a href="..\Website\jeans.php"><img src="..\Img\jeans.jpg" alt=""></a>
                <div class="description">
                <a href="..\Website\jeans.php">Jeans & Trousers</a>
                </div>
            </div>
            <div class="product">
            <a href="..\Website\tops.php"><img src="..\Img\womens-tops.jpg" alt=""></a>
                <div class="description">
                <a href="..\Website\tops.php">Tops</a>
                </div>
            </div>
            <div class="product">
            <a href="..\Website\trad-wear.php"><img src="..\Img\trad-wear.jpg" alt=""></a>
                <div class="description">
                <a href="..\Website\trad-wear.php">Traditional Wear</a>
                </div>
            </div>
    </section>
        
    <section class="feature-product">
        <h2>Kid's Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
            <a href="..\Website\onesies.php"><img src="..\Img\onesies.jpg" alt=""></a>
                <div class="description">
                <a href="..\Website\onesies.php">Baby Onesies</a>
                </div>
            </div>
            <div class="product">
            <a href="..\Website\outwears.php"><img src="..\Img\kids-hoodie.jpg" alt=""></a>
                <div class="description">
                <a href="..\Website\outwears.php">Toddler's Outwear</a>
                </div>
            </div>
            <div class="product">
            <a href="..\Website\apparels.php"><img src="..\Img\kids-tshirts.jpg" alt=""></a>
                <div class="description">
                <a href="..\Website\apparels.php">Kids' Apparel</a>
                </div>
            </div>
    </section>

    <section class="feature-product">
        <h2>Winter Collection</h2>
        <p>Check Out These Categories</p>
        <div class="product-container">
            
            <div class="product">
            <a href="..\Website\hoodies.php"><img src="..\Img\hoodies cat.jpg" alt=""></a>
                <div class="description">
                <a href="..\Website\hoodies.php">Hoodies</a>  
                </div>
            </div>
            <div class="product">
            <a href="..\Website\sweaters.php"><img src="..\Img\sweatshirt-cat.jpg" alt=""></a>
                <div class="description">
                <a href="..\Website\sweaters.php">Sweatshirts</a>  
                </div>
            </div>
            <div class="product">
            <a href="..\Website\jackets.php"><img src="..\Img\jackets-cat.jpg" alt=""></a>
                <div class="description">
                <a href="..\Website\jackets.php">Jackets</a>  
                 </div>
            </div>
            <div class="product">
            <a href="..\Website\turtles.php"><img src="..\Img\turtle-cat.jpg" alt=""></a>
                <div class="description">
                <a href="..\Website\turtles.php">Turtleneck Sweaters</a>  
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