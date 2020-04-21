<?php
        session_start();
?>
<html>
        <head>
                <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&family=Raleway:wght@300&display=swap" 
                rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
        </head>
        <header>
                <div class="splitleft">
                        <title>TCET</title>
                        <img class="logo" src="main_photos/TCET-logo.png" alt="TCET logo">
        
                        <nav>
                                <a href="index.php">Home</a> |
                                <a href="reviews.php">Reviews</a> |
                                <a href="suggestions.php">Suggestions</a> |
                                <a class="active" href="premium.php">Premium</a>
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
                <p>We are working with some brands to get our members special 
                discount codes, stay tuned!</p>


                
        </body>
</html>