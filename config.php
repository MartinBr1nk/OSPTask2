<?php

//SET CONFIG, pre-requisites for session management
//Set this session to activate cookies.
ini_set('session.use_only_cookies', 1);
//Only use session ids from our server. Additonal complex session id generation.
ini_set('session.use_strict_mode', 1);

//SET COOKIES
session_set_cookie_params([
    'lifetime' => 1800, //1800seconds, 30 minutes
    'domain' => 'localhost', //cookies only valid for this domain, localhost/or whatever domain u have
    'path' => '', //cookies valid within this path,/ is also accept, please change this to your directory
    'secure' => true, //true if using https, false for localhost
    'httponly' => true //prevents javascript access to cookies
]);

//START SESSION
session_start();
//session start will create a basic session id, basic

//IF checks if session is new or old
if(!isset($_SESSION['last_regeneration'])){
    session_regenerate_id();
    //regenerate session id to prevent fixation attacks, can also be done periodically during session to enhance security :3
    $_SESSION['last_regeneration'] = time();
    //set a current time for last regeneration
}
else {

    $interval = 1800; //regenerate every 30 minutes
    //Check if interval has passed, find the differencce between current time and last regeneration time
    if(time() - $_SESSION['last_regeneration'] >= $interval){
        //regenerate and store new time
        session_regenerate_id();
        $_SESSION['last_regeneration'] = time();
    }
}
