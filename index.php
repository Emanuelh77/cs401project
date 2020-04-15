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
                        <img class="logo" src="main_photos/TCET-logo.png" alt="TCET logo">
        
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
                <h1>LATEST TECH:</h1>
                <h3>APPLE'S NEW MACBOOK PRO</h3>
                <div class="container">
                        <img src="main_photos/macbook-pro16.jpg" alt="MACBOOK"> 
                        <p>If Apple did nothing else, that one thing makes the 2019 16-inch MacBook Pro 
                        better than its predecessor and any other MacBook you can buy right now. The tide 
                        definitively turned against Apple’s butterfly keyboard design in the past year, 
                        thanks in large part to persistent reporting from Casey Johnston and Joanna Stern, 
                        and Apple had to do something. Thankfully, Apple did the right thing: it went back 
                        to a more traditional keyboard design.</p>
                </div>
                <h3>APPLE'S NEW IPHONE 11 PRO</h3>
                <div class="container">
                        <img src="main_photos/iphones.jpg" alt="MACBOOK"> 
                        <p>iPhone 11 Pro is powered by a hexa-core Apple A13 Bionic processor. 
                        It comes with 4GB of RAM. The iPhone 11 Pro runs iOS 13 and is powered by a 
                        3046mAh non-removable battery. The iPhone 11 Pro supports wireless charging, 
                        as well as proprietary fast charging.</p>
                </div>
                
        </body>
</html>