<?php
    require_once("../../model/chatModel.php");
    session_start();
    $userInfo =  $_SESSION['userInfo'] ;
    $Name =  $userInfo['name'];
    $sender = $Name; //get from session
    $receiver = $_POST['receiver'];
    $messages=getAllmessges($sender,$receiver);
    
    echo json_encode($messages);
?>