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
    }
    
    try{
        require_once 'databaseHandler.php';
        //This links the $pdo object from databaseHandler.php
        //The above works because databaseHandler.php creates the $pdo object for us and is in the same folder.
        //TIME FOR SQL INSERTION, this must be written just like SQL syntax, choose the table and columns to insert into
        $query = "INSERT INTO customer_account (username, email, DOB, Membership, pass) VALUES (:username, :email, :DOB, :Membership, :pass);"; 
        //Prepare the statement using prepared statements, this is to prevent SQL injection
        //This is waiting for the variables to be submitted and bound
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":DOB",$DOB);
        $stmt->bindParam(":Membership",$Membership);   
        $stmt->bindParam(":pass",$pass);     
        //Execute the statement, passing in the variables to replace the ? in the SQL statement
        $stmt->execute();
        //Time to close shop, best practice to close connections, PHP does this automatically
        $stmt = null;
        $pdo = null;
        //Return to homepage after submission
        header("Location: ../OSPTask2/main.php");
        //exit the script, exit() or die() works the same way. die() closes connection.
        die();

    } catch (PDOException $e){
        die("Could not connect to the database:" . $e->getMessage());
    }


    header("Location: ../OSPTask2/main.php");
}

else{
    //No POST method or illegal access, redirect
    header("Location: ../OSPTask2/main.php");
    
}