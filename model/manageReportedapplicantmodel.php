<?php
include 'db.php';

function getReportedApplicants() {
    global $conn;
    $query = "SELECT * FROM reported_applicants";
    $result = mysqli_query($conn, $query);
    $reportedApplicants = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $reportedApplicants[] = $row;
    }
    return $reportedApplicants;
}

// Add any additional functions related to managing reported applicants if needed.
?>
