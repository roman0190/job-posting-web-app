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

$title = "";
$category = "";
$subCategory = "";
$position = "";
$skills = "";
$education = "";
$experience = "";
$type = "";
$location = "";
$description = "";
$responsibilities = "";
$tags = "";
$deadline = "";

$error = "";

if (isset($_REQUEST['submit'])) {

    $error = "";
    $title = $_REQUEST['title'];
    $category = $_REQUEST['category'];
    $subCategory = $_REQUEST['subCategory'];
    $position = $_REQUEST['position'];
    $skills = $_REQUEST['skills'];
    $education = $_REQUEST['education'];
    $experience = $_REQUEST['experience'];
    $type = $_REQUEST['type'];
    $location = $_REQUEST['location'];
    $description = $_REQUEST['description'];
    $responsibilities = $_REQUEST['responsibilities'];
    $tags = $_REQUEST['tags'];
    $deadline = $_REQUEST['deadline'];


    if (
        !$title ||
        !$category ||
        !$subCategory ||
        !$position ||
        !$skills ||
        !$education ||
        !$experience ||
        !$type ||
        !$location ||
        !$description ||
        !$responsibilities ||
        !$tags ||
        !$deadline
    ) {
        echo "Please complete all the fields";
    } else {

        postJob(
            $title,
            $category,
            $subCategory,
            $position,
            $skills,
            $education,
            $experience,
            $type,
            $location,
            $description,
            $responsibilities,
            $tags,
            $deadline,
            $userId
        );
    }
}
