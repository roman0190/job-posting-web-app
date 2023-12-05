<?php
require_once("../../model/chatModel.php");
session_start();
$userInfo =  $_SESSION['userInfo'] ;
    $Name =  $userInfo['name'];
    $sender = $Name; //use session to fatch the name.
    $receiver = $_POST['receiver'];
    $message = $_POST['message'];


if (!empty($message)) {
    insertText($sender, $message, $receiver);
}

?>