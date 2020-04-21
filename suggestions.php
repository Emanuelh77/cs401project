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
                                <a class="active" href="suggestions.php">Suggestions</a> |
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
                <div>
                        <form action="suggestions.php" method="post">
                        <h3>Suggestion box</h3>
                        <p>What item shall we rate next?</p>
                        <textarea placeholder="Suggestion" tabindex="5" name="suggestion_text"></textarea>
                        <?php
                                if(isset($_SESSION['username'])) {

                                        require 'include/dbaccess.php';

                                        echo '<button name="submit" type="submit">Submit</button>';
                                        
                                        if(isset($_POST['submit'])){

                                                $temp = $_POST['suggestion_text'];
                                                $sugg = htmlspecialchars($temp, ENT_QUOTES, 'UTF-8');

                                                $sql = "INSERT INTO Suggestions (suggestion) VALUES (?)";
                                                $stmt = mysqli_stmt_init($conn);
                                                if (!mysqli_stmt_prepare($stmt, $sql)){
                                                        exit();
                                                        echo '<p>SQL error :(</p>';
                                                }
                                                else{
                                                mysqli_stmt_bind_param($stmt, "s", $sugg);
                                                mysqli_stmt_execute($stmt);
                                                echo '<p>Successfully submitted suggestion!</p>';
                                                }
                                        }
                                }
                                else {
                                        echo '<p>You must be logged in for submit button to appear</p>';
                                }
                        ?>
                        </form>
                </div>
        </body>
</html>