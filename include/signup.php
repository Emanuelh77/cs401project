<?php
    session_start();
    if(isset($_SESSION['username']) == true){
        header("Location: ../index.php");
        exit();
    }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&family=Raleway:wght@300&display=swap" 
            rel="stylesheet">
    </head>
    <header>
            <div class="splitleft">
                    <title>TCET</title>
                    <img class="logo" src="../main_photos/TCET-logo.png" alt="TCET logo">
            </div>              
    </header>
    <main>
        <div class="signup">
            <section>
                <h1>Signup</h1>
                <?php
                    if (isset($_GET['error'])){
                        if ($_GET['error'] == "emptyfields"){
                            echo '<p class="signuperror">Fill in all fields!</p>';
                        }
                        else if($_GET['error'] == "invalidemailuid"){
                            echo '<p class="signuperror">Invalid username and email!</p>';
                        }
                        else if($_GET['error'] == "invaliduid"){
                            echo '<p class="signuperror">Invalid username!</p>';
                        }
                        else if($_GET['error'] == "invalidemail"){
                            echo '<p class="signuperror">Invalid email!</p>';
                        }
                        else if($_GET['error'] == "usertaken"){
                            echo '<p class="signuperror">Username already taken!</p>';
                        }
                    }
                    else if ($_GET['signup'] == "success"){
                        echo '<p class="success">Signup successful!</p>';
                    }

                ?>
                <form action="signup.inc.php" method="post">
                    <label for="uid">Enter your username:</label>
                    <input type="text" name="uid" placeholder="username..."
                    value="<?php echo $_GET['uid'];?>">
                    <label for="email">Enter your email:</label>
                    <input type="text" name="email" placeholder="email..."
                    value="<?php echo $_GET['email'];?>">
                    <label for="pwd">Enter your password:</label>
                    <input type="password" name="pwd" placeholder="password...">
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
            </section>
        </div>
        <div>
            <a href="login.php">Log in!</a>
            <p></p>
            <a href="../index.php">Back to homepage!</a>
        </div>
    </main>
</html>

