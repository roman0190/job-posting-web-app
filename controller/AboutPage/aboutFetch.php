<?php
if (!isset($_COOKIE['auth'])) {
    header('location: ../../view/login');
}
if (isset($_COOKIE['userType']) && $_COOKIE['userType'] == "admin") {
    header('location: ../../view/AboutPage/aboutAdmin.php');
}

include_once('../../model/aboutModel.php');
$about = fetchAbout();


?>



<html>


</html>