<?php
if (!isset($_COOKIE['user'])) {
    header('location: ../../view/login');
}
if (isset($_COOKIE['user']) && $_COOKIE['user'] == "admin") {
    header('location: ../../view/AboutPage/aboutAdmin.php');
}

include_once('../../model/aboutModel.php');
$about = fetchAbout();


?>



<html>


</html>