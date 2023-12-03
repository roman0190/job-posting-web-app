<?php
require_once("../../model/chatModel.php");
session_start();
$receiver = $_POST['receiver'];
$message = $_POST['message'];
$sender = 'Tasdid'; //use session to fatch the name.

if (!empty($message)) {
    insertText($sender, $message, $receiver);
}

?>