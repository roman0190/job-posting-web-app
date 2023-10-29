<?php 
    session_start();
    require_once('../model/userModel.php');
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];


    if($username == "" || $password == ""){
        echo "null username/password!";   
    }else{
        
        $status = login($username, $password);
        if($status){
            $_SESSION['username'] = $username;
            $userType = getUserType($username);
            $_SESSION['flag'] = "true";
            if($userType === 'admin') {
                //$_SESSION['flag'] = "admin";
                header('location: ../view/dashboardAdmin.php');
            } elseif($userType === 'applicant') {
                //$_SESSION['flag'] = "applicant";
                header('location: ../view/dashboardApplicant.php');
            } elseif($userType === 'recruiter') {
                //$_SESSION['flag'] = "recruiter";
                header('location: ../view/dashboardRecruiter.php');
            } else {
                echo "Unknown user type or user not found!";
            } 
        }else{
            echo "invaid user!";
        }
    }
?>