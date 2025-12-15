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
       body{ background-image: url('https://www.creativefabrica.com/wp-content/uploads/2023/08/21/yellow-grunge-on-dark-blue-background-Graphics-77367891-1.jpg');}
       table, th, td {
        }
        
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
        <table style="width:100%">
        <tr style =color: white>
            <th>My Toka Page</th>
            <th>Blogs</th>
            <th>My Toka Messages</th>
        </tr>
        <tr>
            <td>My Toka Posts <br> You have No new posts</td>
            <td><center>2nd May 2025 - Celebrations are in order! -Fit Fitness <br>I hear through the pipelines that its your birthday! Fit Fitness on behalf of ToKa Says happyyyyy birthday! Together, we have done 1500 hours of fitness, 800 courses and spent so much time together! from the false bottoms of our hearts thank you.</center></td>
            <td>Cameon Winter - 5 Mins Ago "This Is a very cool toka fitness" </td>
        </tr>
        <tr>
            <td>Enjoy the Toka Social Page Video</td>
            <td><center> <br> <strong>My Toka Friends <br></strong>Alfreds Futterkiste <br> Cameron Winter <br> Damon Albarn <br> Benjamin Button <br> Steven Alexander James</center></td>
            <td>John Toka <br> Hi its me Johnathan Toka I made Toka Fitness</td>
        </tr>
        </table>

       


</body>
</html>

