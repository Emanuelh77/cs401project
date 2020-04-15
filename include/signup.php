<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
    </head>
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
                    <input type="text" name="uid" placeholder="username...">
                    <input type="text" name="email" placeholder="email...">
                    <input type="password" name="pwd" placeholder="password...">
                    <button type="submit" name="signup-submit">Signup></button>
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

