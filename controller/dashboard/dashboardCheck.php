<?php

    session_start();
    $userInfo =  $_SESSION['userInfo'] ;
    $Name =  $userInfo['name'];
    $role =$userInfo['user_type'];

    $userInfo = [
        'name' => $Name,
        'role' => $role
    ];

    echo json_encode($userInfo);

?>