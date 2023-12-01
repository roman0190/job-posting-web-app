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

if (isset($_REQUEST['data'])) {
    $data = json_decode($_REQUEST['data']);

    $error = "";
    $title = $data->title;
    $category = $data->category;
    $subCategory = $data->subCategory;
    $position = $data->position;
    $skills = $data->skills;
    $education = $data->education;
    $experience = $data->experience;
    $type = $data->type;
    $location = $data->location;
    $description = $data->description;
    $responsibilities = $data->responsibilities;
    $tags = $data->tags;
    $deadline = $data->deadline;


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
        echo json_encode(['error' => "Please complete all the fields!"]);
    } else {

        echo postJob(
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
