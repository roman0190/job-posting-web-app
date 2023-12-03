<?php
    require_once("../../model/chatModel.php");
    session_start();

    $username = "zinx"; //session username ;
    $names = getUser($username);
  
    echo json_encode($names);

?>
    
