<?php
require_once 'config.php';
if ($_SESSION ['account_loggedin'] == TRUE) {
    header("Location:loginwelcome.php");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="mainstyle.css">
    <style>
        body {
            background-image: url('https://gymequipment.co.uk/pub/media/magefan_blog/img_23-Blog-DumbbellsMix-opti.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="topnav">
        <p id="logo"><a href="main.php"> Toka Fitness</a></p>
        <p id="topnavbuttons">
            <a href="#fitness portal">Fitness Portal</a>
            <a href="videoapi.html">Fitness Videos</a>
            <a href="api.html">My Diet Log</a>
            <a href="socialpage.php">The Social</a>
        </p>
    </div>
    <div class="container">
        <div class="form-box active" id="login-form">
            <form action="loginhandle.php" method="post">
                <h2>Login</h2>
                <input type="text" name="username" placeholder="Username" required>
                <br>
                <input type="email" name="email" placeholder="email" required>
                <br>
                <input type="password" name="password" placeholder="password" required>
                <br>
                <p> Dont have an account? <a href="signup.php">sign up </a></p>
                <button type="submit" name="login">login</button>
            </form>
        </div>
    </div>


</body>

</html>