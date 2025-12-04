<?php

//Check if user HAS USED POST method
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Check entries for special characters in given variables
    $username = htmlspecialchars($_POST['username']);
    if(empty($username)){
        header("location: ../OSPTask2/main.php");
        exit();
    }
    $pass = htmlspecialchars($_POST['password']);
    $pass = password_hash(password: $_POST['password'],algo: PASSWORD_DEFAULT);
    if(empty($pass)){
        header("location: ../OSPTask2/main.php");
        exit();
    }
    $email = htmlspecialchars($_POST['email']);
    if(empty($email)){
        header("location: ../OSPTask2/main.php");
        exit();
    }
    $DOB = htmlspecialchars($_POST['DOB']);
    if(empty($DOB)){
        header("location: ../OSPTask2/main.php");
        exit();
    }
    $Membership = htmlspecialchars($_POST['Membership']);
    if(empty($Membership)){
        header("location: ../OSPTask2/main.php");
        exit();
    }}