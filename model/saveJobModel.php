<?php
include_once("db.php");

function viewSavedJobs($userId){
    $con = getConnection();
    $sql = "SELECT * FROM jobs WHERE id IN (SELECT job_id FROM saved_jobs WHERE user_id = $userId)";
    $result = mysqli_query($con, $sql);
    $jobs = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($jobs, $row);
    }

    return $jobs;
}
?>
