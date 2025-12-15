<!DOCTYPE html>
<?php
    require_once 'config.php';
    session_start();
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
    <div class="cool_box">
        <div class="topnav">
            <p id="logo"><a href="main.php"> Toka Fitness</a></p>
            <p id="topnavbuttons">
                <a href="fitportalthing.html">Fitness Portal</a>
                <a href="videoapi.html">Fitness Videos</a>
                <a href="api.html">My Diet Log</a>
                <a href="socialpage.php">The Social</a>
            </p>
            <p style="color: white;"> From Fitness Advice to Diet Goals, We help you Keep Fit</p>
        </div>
        <div class="center">
            <a href="login.php"><button type="button"> Log In</button> </a>
            <a href="signup.php"><button type="button"> Sign Up</button></a>
        </div>
    </div>
</body>

</html>
