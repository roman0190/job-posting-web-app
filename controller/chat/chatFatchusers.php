<?php
    require_once("../../model/chatModel.php");
    session_start();
    $userInfo =  $_SESSION['userInfo'] ;
    $username =  $userInfo['username'];
    $names = getUser($username);
  
    echo json_encode($names);

?>
    
