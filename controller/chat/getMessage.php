<?php
    require_once("../../model/chatModel.php");
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
    
    $Name =  $userInfo['name'];
    $sender = $Name; //get from session
    $receiver = $_POST['receiver'];
    $messages=getAllmessges($sender,$receiver);
    
    echo json_encode($messages);
?>