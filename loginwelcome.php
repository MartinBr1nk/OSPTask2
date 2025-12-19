<!DOCTYPE html>

<?php
require_once "config.php";
session_regenerate_id();
?>

<html>

    <head>

        <link rel="stylesheet" href="loginstyle.css">
        <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
        <style>
        body{ background-image: url('https://cdn.pixabay.com/photo/2019/01/20/00/48/weights-3942914_960_720.jpg');}
        img { border-radius: 50%;}
        text-color:"white"
        </style>
    </head>
        <body>
            <div class="topnav">
                <p id="logo"><a href="main.php"> Toka Fitness</a></p>
                <p id="topnavbuttons">
                    <a href="fitportalthing.html">Fitness Portal</a>
                    <a href="videoapi.html">Fitness Videos</a>
                    <a href="api.html">My Diet Log</a>
                    <a href="socialpage.php">The Social</a>
                </p>
                <p style="color: white;">WELCOME, <?php echo $_SESSION["account_name"] ?> How can we help?</p>
            </div>
    <div class = "manage-box">
    <center> 
            <img src="https://cdn.pixabay.com/photo/2018/04/18/18/56/user-3331256_960_720.png" width="300" height="200"> 
            <p style="color:white;"> <br> Your Name: <?php echo $_SESSION["account_name"] ?> </p>
            <?php
            if ($_SESSION["Membership"] == true ) {
                echo "<p>Premium Status: True</p>";
            }
            else if ($_SESSION["Membership"] == false) {
                echo "<p style='color:white'> Premium Status: False</p>";
            }
            ?>
            <button type = "button" onclick="window.location.href ='signout.php'"> log out</button>
    </center>

    
            
    </div>



</html>       