<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    try{
        //connect database
        require_once 'databaseHandler.php';
        require_once 'config.php';

        //------------ERROR HANDLING------------

        //Check for any errors in sent data from user
        $errors = [];
        //Check if fields are empty
        if(empty($username) || empty($pass)){
            //if empty then add error message to errors array
            $errors["empty_input"] = "Username and password are required.";
        };
        //------------SQL CHECK AND GET USER------------

        //Check if username exists in database
        $matchQuery = "SELECT * FROM customer_account WHERE username = :username";
        $stmt = $pdo->prepare($matchQuery);
        $stmt->bindParam(':username', $username);
        $stmt->execute();    
        //Hold given result as $matchResult, this is a single row fetch as an array
        $matchResult = $stmt->fetch(PDO::FETCH_ASSOC);
        if(empty($matchResult)){
            //If result is empty, then username does not exist
            $errors["username_not_exist"] = "No account found with that username.";
        }
        //------------ERROR HANDLING output------------

        if($errors){
            //If there are errors, redirect back to index.php with error messages
            $_SESSION["errors_login"] = $errors;
            //Attach errors to session variable
            header("location: ..OSPTask2/main.php");
        }
        //------------PASSWORD HASHING------------

        //Hash given password and compare with hashed password in database
        $hashOptions = [
            'cost' => 12,
        ];
        $hashedPwd = password_hash($pass, PASSWORD_BCRYPT, $hashOptions);
                //------------VERIFY PASSWORDS------------
        if(password_verify($pass, $matchResult["pass"]) == true){
            //Password is correct, start session
        
            //set session variables
            $_SESSION["account_loggedin"] = TRUE;
            echo $_SESSION["account_loggedin"] . "<BR>";
            $_SESSION["account_name"] = $matchResult['username'];
            echo $_SESSION['account_name'] .'<br>';
            $_SESSION["account_id"] = $matchResult['id'];
            echo $_SESSION['account_id'] .'<br>';
            //finish session write
            echo "SESSIONS" . "<BR>";
            
            //Redirect to user settings page
            header("location: ../OSPTask2/loginwelcome.php");
            session_write_close();
            
            
        }
        else{
        
            echo"here is error";
            $errors["incorrect_password"] = "The password you entered is incorrect.";
            $_SESSION["errors_login"] = $errors;
            header("location: ../OSPTask2/main.php");
        }
        }
    catch (PDOException $e){
        header("location: ../OSPTask2/main.php");
        die("Query failed: " . $e->getMessage());
    }
        }
        else {
            header("location: ..OSPTask2/main.php");
            
        }
        
?>


