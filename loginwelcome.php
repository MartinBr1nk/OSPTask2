<!DOCTYPE html>

<?php
require_once "config.php";
session_regenerate_id();
echo $_SESSION["account_loggedin"]
?>

<html>

<head>

    <link rel="stylesheet" href="mainstyle.css">
    <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
    <style>
       body{ background-image: url('https://res-3.cloudinary.com/gll/image/upload/v1713880875/xta04aksf7jzgo9vq759.jpg');}
    </style>
</head>
    <body>
        <div class="topnav">
            <p id="logo"><a href="main.php"> Toka Fitness</a></p>
            <p id="topnavbuttons">
                <a href="#fitness portal">Fitness Portal</a>
                <a href="videoapi.html">Fitness Videos</a>
                <a href="api.html">My Diet Log</a>
                <a href="#The Social">The Social</a>
            </p>
        </div>
<div class = "welcome_box">
        
        <h1>WELCOME, <?php echo $_SESSION["account_name"] ?> How can we help?</h1>
        
</div>


        <div class="topnav">
            <p id="logo"><a href="main.php"> Toka Fitness</a></p>
            <p id="topnavbuttons">
                <a href="#fitness portal">Fitness Portal</a>
                <a href="videoapi.html">Fitness Videos</a>
                <a href="api.html">My Diet Log</a>
                <a href="#The Social">The Social</a>
            </p>
        </div>
</html>


