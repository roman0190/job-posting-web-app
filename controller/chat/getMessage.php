<?php
    require_once("../../model/chatModel.php");
    session_start();
    $sender = 'Tasdid'; //get from session
    $receiver = $_POST['receiver'];
    $messages=getAllmessges($sender,$receiver);
    
    echo json_encode($messages);
?>