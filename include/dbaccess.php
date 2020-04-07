<?php

$host = "us-cdbr-iron-east-01.cleardb.net";
$db = "heroku_e7a01c19c54ad2a";
$user = "bb25452e90f759";
$pass = "fd33378f";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>