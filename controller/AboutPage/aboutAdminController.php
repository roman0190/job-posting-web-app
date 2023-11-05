<?php
if (!isset($_COOKIE['user'])) {
    header('location: ../../view/login');
}
if (isset($_COOKIE['user']) && $_COOKIE['user'] != "admin") {
    header('location: ../../view/AboutPage/about.php');
}


include_once('../../model/aboutModel.php');
$about = fetchAbout();

if (isset($_REQUEST['submit']) && $_REQUEST['about'] != '') {
    updateAbout($_REQUEST['about']);
}

?>



<html>

</html>