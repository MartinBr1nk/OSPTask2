<!DOCTYPE html>

<?php
require_once "config.php";
session_regenerate_id();
?>

<html>

    <head>

        <link rel="stylesheet" href="mainstyle.css">
        <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
        <style>
        body{ background-image: url('https://res-3.cloudinary.com/gll/image/upload/v1713880875/xta04aksf7jzgo9vq759.jpg');}
        img { border-radius: 50%;}
        text-color:"white"
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
                <p style="color: white;">WELCOME, <?php echo $_SESSION["account_name"] ?> How can we help?</p>
            </div>
    <div class = "manage-box">
    <center> 
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.rollingstone.com%2Fwp-content%2Fuploads%2F2018%2F09%2FR1320_QA_Damon_A.jpg%3Fw%3D1581%26h%3D1054%26crop%3D1&f=1&nofb=1&ipt=0ae513f2e2e6663d715a50706d4ddc9fe564bb88c3d249252db9e696e89dc16a" alt="You (very cool)" style=width:200px;height:125px> 
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