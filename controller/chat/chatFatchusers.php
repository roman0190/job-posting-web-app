<?php
    require_once("../../model/chatModel.php");
    session_start();
    $userInfo = [];
 
    if (isset($_COOKIE['userInfo'])) {
        $userInfo = (array) json_decode($_COOKIE['userInfo']);
    } else {
        session_start();
        if (isset($_SESSION['userInfo'])) {
            $userInfo = (array)  json_decode($_SESSION['userInfo']);
        } else {
            // no userInfo in $_SESSION or $_COOKIE
        }
    }
    $username =  $userInfo['username'];
    $names = getUser($username);
  
    echo json_encode($names);

?>
    
