<?php

  include 'connection.php'; // connecting  database 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Retail Club</title>

    <script src="https://kit.fontawesome.com/98e008cd61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\login_style.css">
</head>
<body>

    <div class="container">
        <div class="forms-container">
            <div class="login-signup">
 <!-- logib page -->
                <form action="login.php" class="sign-in-form" method = "POST">
                    <h2 class="title">Sign in</h2>

                    <!-- <?php
                    
                    if(isset($message)){
                        foreach($message as $message){
                            echo '<div class="message">'.$message.'</div>';
                        }
                    }
                    
                    ?> -->

                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Username" name= "username" id="log_name">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" placeholder="Password" name = "password" id="log_pass">
                    </div>
                  
    
                    <input type="submit" value="Login" class="btn solid" name = "submit" >
            <!--<button name = "submit"  class ="btn solid "  >login</button> -->
<!--done with login -->
                    <p class="social-text">Or Sign in with social platforms</p>

                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
    <!--signup pagae -->
                <form action="signup.php" class="sign-up-form" method= "POST" autocomplete = "off">
                    <h2 class="title">Sign up</h2>

                    
                    <!-- <?php
                    
                    if(isset($message)){
                        foreach($message as $message){
                            echo '<div class="message">'.$message.'</div>';
                        }
                    }
                    
                    ?> -->

                    <div class="input-field">
                        <i class="fa-solid fa-signature"></i>
                        <input type="text" placeholder="Name"  name= "name">
                    </div>


                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Username"  name= "username">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" placeholder="Email"  name= "email">
                    </div>

                    
                    <div class="input-field">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" placeholder="Password" name = "password">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" placeholder="Confirm Password" name = "cpassword">
                    </div>

                    <input type="submit" value="Sign up" name="submit" class="btn solid">
    
     <!-- done-->


                    <p class="social-text">Or Sign up with social platforms</p>

                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quos eos possimus impedit ad quisquam temporibus, laboriosam, culpa placeat soluta delectus asperiores similique nam ratione itaque quia. Consequatur, facilis similique.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>

                <img src="img\login.svg" alt="" class="image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Already have an account?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quos eos possimus impedit ad quisquam temporibus, laboriosam, culpa placeat soluta delectus asperiores similique nam ratione itaque quia. Consequatur, facilis similique.</p>
                    <button class="btn transparent" id="sign-in-btn">Login</button>
                </div>

                <img src="img\signup.svg" alt="" class="image">
            </div>
        </div>
    </div>

    <script src="js\app.js"></script>

    <script>
    
    function isvalid (){

        var username = document.form.username.value;
        var password = document.form.password.value;
        if (username.length== "" && password.length== ""){
            alert("username or password field is empty ");
            return false 
        }
        else{

            if (password.length== ""){
                alert(" password field is empty ");
                return false 
            }

            if (username.length== "" ){
                alert("username  field is empty ");
                return false 
            }
        }
    }

   </script>
    
</body>
</html>