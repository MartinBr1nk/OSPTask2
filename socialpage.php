<!DOCTYPE html>

<?php
require_once "config.php";
session_regenerate_id();
?>

<html>

<head>

    <link rel="stylesheet" href="socialcss.css">
    <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
    <style>
       body{ background-image: url('https://media.discordapp.net/attachments/1282670009868357682/1450141306767675534/i_made_this_so_you_dont_have_to.png?ex=694174d5&is=69402355&hm=f34b375a04b3c1b2e5e76ef1e2a2bedfc596a2983982c6c0551f3b16dfdb1f60&=&format=webp&quality=lossless');}
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
            <p style="color: white;"> Welcome, <?php echo $_SESSION["account_name"] ?> To your social page.</p>
        </div>


    <div class="cool_box">    
        <center>
            <div class="post_box">
                <p> John Halflife - 2 Minutes ago</p>
                <img src="https://cdn.pixabay.com/photo/2019/01/20/00/48/weights-3942914_960_720.jpg", height="400" width="800">
                <p> I sure do Love ToKa Fitness! It is great! I love the videos! that Liam guy is hillarious!</p>
            </div>

            <div class="post_box">
                <p> Shirley Fitness - 9 Minutes ago</p>
                <img src="https://cdn.pixabay.com/photo/2014/10/13/15/31/muesli-486832_1280.jpg", height="400" width="800">
                <p> About to have a ToKa-tastic day! feeling #blessed.</p>
            </div>

            <div class="post_box">
                <p> Fit Fitness's No.1 Fan - 5 Hours Ago</p>
                <img src="https://cdn.pixabay.com/photo/2023/03/25/19/09/runner-7876675_1280.jpg", height="400" width="800">
                <p> As they say, It takes a marathon to fix a fighter jet. I am on the marathon part but its so freakin hard D: so glad toka is really helpful with it though! </p>
            </div>

            </div>
        </center>
        



        
    </div>
       


</body>
</html>

