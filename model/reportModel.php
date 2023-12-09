<?php
include_once("db.php");

function reportJob($jobId, $reporterId)
{
    $con = getConnection();
    $sql = "select * from reported_jobs where job_id = $jobId and reported_by = $reporterId";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return ['error' => true, 'message' => "You already reported this application"];
    }
    $sql = "insert into reported_jobs (job_id, reported_by) values ('{$jobId}','{$reporterId}')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        return ['success' => true, 'message' => "Reported"];
    } else {
        return ['error' => true, 'message' => "database error"];
    }
}
function reportApplicant($application_id, $reporterId)
{
    $con = getConnection();
    $sql = "select * from reported_applications where application_id = $application_id and reported_by = $reporterId";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return ['error' => true, 'message' => "You already reported this job"];
    }
    $sql = "insert into reported_applications (application_id, reported_by) values ('{$application_id}','{$reporterId}')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        return ['success' => true, 'message' => "Reported"];
    } else {
        return ['error' => true, 'message' => "database error"];
    }
}
