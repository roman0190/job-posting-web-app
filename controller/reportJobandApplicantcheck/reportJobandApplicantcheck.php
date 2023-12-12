<?php
include ('../../model/db.php');


function getReportedJobs() {
    $con = getConnection();
    $queryJobs = "SELECT * FROM reported_jobs";
    $resultJobs = mysqli_query($con, $queryJobs);

    $reportedJobs = array();
    while ($row = mysqli_fetch_assoc($resultJobs)) {
        $reportedJobs[] = $row;
    }

    mysqli_close($con);
    return $reportedJobs;
}

function getReportedApplicants() {
    $con = getConnection();
    $queryApplicants = "SELECT * FROM reported_applicants";
    $resultApplicants = mysqli_query($con, $queryApplicants);

    $reportedApplicants = array();
    while ($row = mysqli_fetch_assoc($resultApplicants)) {
        $reportedApplicants[] = $row;
    }

    mysqli_close($con);
    return $reportedApplicants;
}
?>


