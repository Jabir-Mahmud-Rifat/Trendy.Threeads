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

    <link rel="stylesheet" href="..\css\admin_style.css">

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
                        <button class="user-btn"><a href="" class="login-btn" id="login-btn"><i class="fa-solid fa-user"></i></a></button>                     
                        <div class="user-content">
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
        

   
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>

<h2> Admin access</h2>




<a href="http://localhost/phpmyadmin/index.php?route=/sql&db=cse299&table=category&pos=0" class="button"> Add Category </a>     <!--  devolop add category page the  add the link here -->

<a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=cse299&table=products" class="button"> Add Product </a>

<a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=cse299&table=order" class="button">Manage Order </a>

<a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=cse299&table=billing+info+%28orders%29" class="button">Manage Payment </a>

<a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=cse299&table=feedback" class="button">check Feedback</a>





</body>
</html>










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