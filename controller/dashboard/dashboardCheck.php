<?php

    session_start();
    $userInfo = [];
 
    if (isset($_COOKIE['userInfo'])) {
        $userInfo = (array) json_decode($_COOKIE['userInfo']);
    } else {
        session_start();
        if (isset($_SESSION['userInfo'])) {
            $userInfo = (array)  json_decode($_SESSION['userInfo']);
        } else {
            
        }
    }
    $Name =  $userInfo['name'];
    $role =$userInfo['user_type'];

    $userInfo = [
        'name' => $Name,
        'role' => $role
    ];

    echo json_encode($userInfo);

?>