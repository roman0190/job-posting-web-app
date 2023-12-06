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

if(isset($userInfo)){
    $Name =  $userInfo['name'];
    $sender = $Name; //use session to fatch the name.
    $receiver = $_POST['receiver'];
    $message = $_POST['message'];
    if (!empty($message)) {
        insertText($sender, $message, $receiver);
    }

}
    




?>