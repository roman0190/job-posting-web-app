<?php
require_once 'db.php';

function getReportedJobs() {
    global $con;

    $reportedJobs = [];
    $query = "SELECT id, job_id, reported_by FROM reported_jobs";
    $result = mysqli_query($con, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $reportedJobs[] = $row;
        }
        mysqli_free_result($result);
    }

    return $reportedJobs;
}

function getReportedApplicants() {
    global $con;

    $reportedApplicants = [];
    $query = "SELECT id, applicant_id, reported_by FROM reported_applicants";
    $result = mysqli_query($con, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $reportedApplicants[] = $row;
        }
        mysqli_free_result($result);
    }

    return $reportedApplicants;
}
?>
