<?php
include ('../../model/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (isset($_POST['job_id'])) {
        $jobId = $_POST['job_id'];
        
        $queryInsertJob = "INSERT INTO reported_jobs (job_id, reported_by) VALUES ('$jobId', 'admin')";
        mysqli_query($con, $queryInsertJob);
        
        
        header("Location: ../../view/reportJobandApplicant/reportJobandApplicant.php");
        exit();
    }

    if (isset($_POST['applicant_id'])) {
        $applicantId = $_POST['applicant_id'];
        $queryInsertApplicant = "INSERT INTO reported_applicants (applicant_id, reported_by) VALUES ('$applicantId', 'admin')";
        mysqli_query($con, $queryInsertApplicant);
        
        
        header("Location: ../../view/reportJobandApplicant/reportJobandApplicant.php");
        exit();
    }
}


header("Location: ../../view/reportJobandApplicant/reportJobandApplicant.php");
exit();
?>
