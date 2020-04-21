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
        <div class="login">
            <section>
                <h1>Login</h1>
                <?php
                    if (isset($_GET['error'])){
                        if ($_GET['error'] == "wrong"){
                            echo '<p class="signuperror">Username or password incorrect!</p>';
                        }
                        else if($_GET['error'] == "nouser"){
                            echo '<p class="signuperror">Username does not exist!</p>';
                        }
                        else if($_GET['error'] == "emptyfields"){
                            echo '<p class="signuperror">Cannot leave fields empty!</p>';
                        }
                    }
                ?>
                <form action="login.inc.php" method="post">
                    <label for="username">Enter your username:</label>
                    <input type="text" name="username" placeholder="username..."
                    value="<?php echo $_GET['uid'];?>">
                    <label for="pwd">Enter your password:</label>
                    <input type="password" name="pwd" placeholder="password...">
                    <button type="submit" name="login-submit">Login</button>
                </form>
            </section>
        <p>Don't have an account yet? </p>
        <a href="signup.php">Sign up!</a>
        </div>
    </main>
</html>