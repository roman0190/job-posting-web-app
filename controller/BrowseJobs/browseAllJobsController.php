<?php
include_once("../../model/jobModel.php");
// $userId = $_COOKIE['user'];
$userId = $_COOKIE['userId'];
$jobs = [];



$search = "";
$category = "";
$subCategory = "";
$skills = "";
$experience = "";
$type = "";
$location = "";

if (isset($_GET['submit'])) {
    isset($_GET['search']) ? $search = $_GET['search'] : "";
    isset($_GET['category']) ? $category = $_GET['category'] : "";
    isset($_GET['subCategory']) ? $subCategory = $_GET['subCategory'] : "";
    isset($_GET['skills']) ? $skills = $_GET['skills'] : "";

    isset($_GET['experience']) ? $experience = $_GET['experience'] : "";
    isset($_GET['type']) ? $type = $_GET['type'] : "";
    isset($_GET['location']) ? $location = $_GET['location'] : "";
}

if (
    ($search == "" &&
        $category == "" &&
        $subCategory == "" &&
        $skills == "" &&
        $experience == "" &&
        $type == "" &&
        $location == "")
) {
    $jobs = fetchAllJobs();
} elseif (isset($_REQUEST['reset'])) {

    $search = "";
    $category = "";
    $subCategory = "";
    $skills = "";
    $experience = "";
    $type = "";
    $location = "";
    $jobs = fetchAllJobs();
} else {
    $jobs = fetchAllJobsWithFilters(
        $search,
        $category,
        $subCategory,
        $skills,
        $experience,
        $type,
        $location
    );
}


?>

<html>

</html>