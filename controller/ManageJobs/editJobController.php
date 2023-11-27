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

if (!isset($_REQUEST['id'])) {
    header('location: myJobs.php');
}


include_once("../../model/jobModel.php");
$id = $_REQUEST['id'];
$job = fetchOneJob($id);






$title = $job['title'];
$category = $job['category'];
$subCategory = $job['sub_category'];
$position = $job['job_position'];
$skills = $job['required_skills'];
$education = $job['required_education'];
$experience = $job['required_experience'];
$type = $job['job_type'];
$location = $job['job_location'];
$description = $job['job_description'];
$responsibilities = $job['job_responsibilities'];
$tags = $job['tags'];
$deadline = $job['application_deadline'];

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
        $error = "Please complete all the fields";
    } else {
        editJob(
            $id,
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
            $deadline
        );
    }
}
