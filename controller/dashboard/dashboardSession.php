<?php

    session_start();

    if (isset($_COOKIE['userInfo'])) {
        $userInfo = (array) json_decode($_COOKIE['userInfo']);
    } else {
        session_start();
        if (isset($_SESSION['userInfo'])) {
            $userInfo = (array)  json_decode($_SESSION['userInfo']);
        } 
    }

    $role = $userInfo['user_type'];

    if ($role === 'admin') {
        header('location: ../../view/dashboard/dashboardAdmin.php');
        
    } else if ($role === 'applicant') {
        header('location: ../../view/dashboard/dashboardApplicant.php');
        
    } else if ($role === 'recruiter') {
        header('location: ../../view/dashboard/dashboardRecruiter.php');
    
    }
?>

