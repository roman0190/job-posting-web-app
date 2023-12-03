<?php
//fatch name and user type from database
//example name
    $name = 'Roman';
    $role ='admin';

    $userInfo = [
        'name' => $name,
        'role' => $role
    ];

    echo json_encode($userInfo);

?>