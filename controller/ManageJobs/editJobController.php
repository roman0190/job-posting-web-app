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
if (isset($job['error'])) {
    header('location: invalidJob.php');
}





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

if (isset($_REQUEST['data'])) {

    $data = json_decode($_REQUEST['data']);
    $id = $data->id;
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
        !$id ||
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
        echo editJob(
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
