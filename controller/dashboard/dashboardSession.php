<?php

session_start();

if (isset($_SESSION['userInfo'])) {
    $userInfo = $_SESSION['userInfo'];

    if (isset($userInfo['user_type'])) {
        $role = $userInfo['user_type'];

        if ($role === 'admin') {
            header('location: ../../view/dashboard/dashboardAdmin.php');
            
        } else if ($role === 'applicant') {
            header('location: ../../view/dashboard/dashboardApplicant.php');
           
        } else if ($role === 'recruiter') {
            header('location: ../../view/dashboard/dashboardRecruiter.php');
        
        }
    } else {
        
        echo "Error: 'user_type' not set in userInfo.";
    }
} else {
   
    echo "Error: 'userInfo' not set in session.";
}

?>
