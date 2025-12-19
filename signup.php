<?php
require_once 'config.php';
session_start();
if ($_SESSION ['account_loggedin'] == TRUE) {
    header("Location:loginwelcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>sign-up page</title>
        <link rel="stylesheet" href="mainstyle.css">
        <style>
            body{ 
                background-image: url('https://cdn.pixabay.com/photo/2019/01/20/00/48/weights-3942914_960_720.jpg');
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
                <a href="">The Social</a>
            </p>
        </div>

        <div class = "form-box active" id="register-form">
            <form action="formhandler.php" method="post">
                <h2> Register</h2>
                <input type ="text" name="username" placeholder="username" required>
                <br>
                <input type ="text" name="email" placeholder="email" required>
                <br>
                <input type="text" name="password" placeholder="password" required>
                <br>
                <input type="date" name="DOB" placeholder="Date Of Birth (DD/MM/YYYY)" required>
                <br>
                <input type="checkbox" name="Membership" placeholder="Membership" value="1">

                <p> already have an account?<a href = "login.php"> log in</a></p>
                <button onclick="alert('success!')" type="submit" name="submit">Register</button>
            </form>
        </div>
    </body>
</html>