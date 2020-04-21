<?php

if (isset($_POST['login-submit'])){

    require 'dbaccess.php';

    $username = $_POST['username'];
    $password = $_POST['pwd'];

    if(empty($username) || empty($password)){
        header("Location: login.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM Users WHERE Username=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: login.php?error=sqlerror");
            exit();
        }
        else{

            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['Password']);
                if ($pwdCheck == false){
                    header("Location: login.php?error=wrong");
                    exit();
                }
                else if ($pwdCheck == true){
                    session_start();
                    $_SESSION['username'] = $row['Username'];

                    header("Location: ../index.php?login=success");

                }
                else {
                    header("Location: login.php?error=wrong");
                    exit();
                }
            }
            else {
                header("Location: login.php?error=nouser&uid=".$username);
                exit();
            }
        }
    }
}

else {
    header("Location: login.php");
    exit();
}
