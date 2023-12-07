<?php
include 'db.php';

function getReportedJobs() {
    global $con;
    $query = "SELECT * FROM reported_jobs";
    $result = mysqli_query($con, $query);
    $reportedJobs = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $reportedJobs[] = $row;
    }
    return $reportedJobs;
}

// Add any additional functions related to managing reported jobs if needed.
?>
