<?php

    session_start();
    if (isset($_COOKIE['userInfo'])) {
        $userInfo = (array) json_decode($_COOKIE['userInfo']);
    } else {
        if (isset($_SESSION['userInfo'])) {
            $userInfo = (array)  json_decode($_SESSION['userInfo']);
        } else {
            
        }
    }
    
        $role = $userInfo['user_type'];

        if ($role === 'admin') {
            header('location: ../../view/dashboard/dashboardAdmin.php');
            
        } else if ($role === 'applicant') {
            header('location: ../../view/dashboard/dashboardApplicant.php');
           
        } else if ($role === 'recruiter') {
            header('location: ../../view/dashboard/dashboardRecruiter.php');
        
        } else {
            header('location: ../../view/Auth/logout.php');
        }
?>

