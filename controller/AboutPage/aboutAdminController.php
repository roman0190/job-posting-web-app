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

if ($userType != "admin") {
    header('location:about.php');
}


include_once('../../model/aboutModel.php');
$about = fetchAbout();

if (isset($_REQUEST['submit']) && $_REQUEST['about'] != '') {
    updateAbout($_REQUEST['about']);
}

?>



<html>

</html>