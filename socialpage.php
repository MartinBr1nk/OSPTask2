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
       body{ background-image: url('https://www.creativefabrica.com/wp-content/uploads/2023/08/21/yellow-grunge-on-dark-blue-background-Graphics-77367891-1.jpg');}
       table, th, td {
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
                <a href="#The Social">The Social</a>
            </p>
            <p style="color: white;"> Welcome, <?php echo $_SESSION["account_name"] ?> To your social page.</p>
        </div>


        
    <div class="cool_box">
        <table style="width:100%">
        <tr style =color: white>
            <th>My Toka Page</th>
            <th>My Toka Friends</th>
            <th>My Toka Messages</th>
        </tr>
        <tr>
            <td>My Toka Posts <br> You have No new posts</td>
            <td>Blogs<br> 2nd May 2025 - Celebrations are in order! -Fit Fitness <br>I hear through the pipelines that its your birthday! Fit Fitness on behalf of ToKa Says happyyyyy birthday! Together, we have done 1500 hours of fitness, 800 courses and spent so much time together! from the false bottoms of our hearts thank you.</td>
            <td>Cameon Winter - 5 Mins Ago "This Is a very cool toka fitness" </td>
        </tr>
        <tr>
            <td>Enjoy the Toka Social Page Video</td>
            <td><center> Alfreds Futterkiste <br> Cameron Winter <br> Damon Albarn <br> Benjamin Button <br> Steven Alexander James</center></td>
            <td>John Toka <br> Hi its me Johnathan Toka I made Toka Fitness</td>
        </tr>
        </table>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/I2Zxb1CM7GM?si=DlA6BB6krSBVBGhJ&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>


</body>
</html>

