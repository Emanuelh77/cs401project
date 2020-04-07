<?php
        session_start();
?>

<html>
        <head>
                <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
        </head>
        <header>
                <div class="splitleft">
                        <title>TCET</title>
                        <img src="main_photos/TCET-logo.png" alt="TCET logo">
        
                        <nav>
                                <a class="active" href="index.php">Home</a> |
                                <a href="reviews.php">Reviews</a> |
                                <a href="suggestions.php">Suggestions</a> |
                                <a href="premium.php">Premium</a>
                        </nav>
                </div>
                <div class="splitright">
                        <ul class="vertical">
                        <?php
                                if(isset($_SESSION['username'])) {
                                        echo '<li>You are logged in!</li>';
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
                <h1>LATEST TECH:</h1>
                <h3>APPLE'S NEW MACBOOK PRO</h3>
                <div>
                        <p><img class="previews" src="main_photos/macbook-pro16.jpg" alt="MACBOOK"> 
                        This is summary information about the item. This is summary information about the item.
                        This is summary information about the item. This is summary information about the item.</p>
                </div>
                <div>
                        <p><img class="previews" src="main_photos/bose.jpg" alt="bose headphones"> 
                        This is summary information about the item. This is summary information about the item.
                        This is summary information about the item. This is summary information about the item.</p>
                </div>
                <div>
                        <p><img class="previews" src="main_photos/nvidia-card.jpeg" alt="nvidia card"> 
                        This is summary information about the item. This is summary information about the item.
                        This is summary information about the item. This is summary information about the item.</p>
                </div>
                
        </body>
</html>