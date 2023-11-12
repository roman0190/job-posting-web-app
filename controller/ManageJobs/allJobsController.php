<?php
$userId = "";
$userType = "";
if (isset($_COOKIE['auth']) && isset($_COOKIE['userId']) && isset($_COOKIE['userType'])) {
    $userId = $_COOKIE['userId'];
    $userType = $_COOKIE['userType'];
} else {
    session_start();
    if (isset($_SESSION['auth']) && isset($_SESSION['userId']) && isset($_SESSION['userType'])) {
        $userId = $_SESSION['userId'];
        $userType = $_SESSION['userType'];
    } else {
        header('location: ../Auth/login.php');
    }
}


if ($userType != "recruiter") {
    header('location: ../BrowseJobs/browseAllJObs.php');
}

include_once("../../model/jobModel.php");


$jobs = fetchAllJobsForOneRecruiter($userId);

?>

<html>

</html>