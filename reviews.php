<?php
        session_start();
?>
<html>
        <head>
                <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
                <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&family=Raleway:wght@300&display=swap" 
                rel="stylesheet">
                <script src="https://code.jquery.com/jquery-3.5.0.min.js" 
                        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" 
                        crossorigin="anonymous">
                </script>
                <script>
                        $(function() {

                        $(".items").hide(100).show(1000);
                        });
                </script>
        </head>
        <header>
                <div class="splitleft">
                        <title>TCET</title>
                        <img class="logo" src="main_photos/TCET-logo.png" alt="TCET logo">
        
                        <nav>
                                <a href="index.php">Home</a> |
                                <a class="active" href="reviews.php">Reviews</a> |
                                <a href="suggestions.php">Suggestions</a> |
                                <a href="premium.php">Premium</a>
                        </nav>
                </div>
                <div class="splitright">
                        <ul class="vertical">
                        <?php
                                if(isset($_SESSION['username'])) {
                                        echo '<li>You are logged in!</li>';
                                        echo '<form action="include/logout.inc.php" method="post">';
                                        echo '<button type="submit" name="logout-submit">Logout</button>';
                                        echo '</form>';
                                }
                                else {
                                        echo'<li><a href="include/login.php">Log in</a></li>';
                                        echo'<li><a href="include/signup.php">Sign up</a></li>';
                                }
                        ?>
                        </ul>
                </div>
                
        </header>
        <body>
                <h1>Category:</h1>
                <div>
                        <h4>laptops</h4>
                        <ul>
                                <li class="items"><a href="laptop_cat/macbook.php">Apple Macbook Pro 16inch</a></li>
                        </ul>
                </div>
                <div>
                        <h4>phones</h4>
                        <ul>
                                <li class="items"><a href="phone_cat/iphone.php">Iphone 11 Pro</a></li>
                        </ul>
                </div>

        <p>More ratings coming soon!</p>
                
        </body>
</html>