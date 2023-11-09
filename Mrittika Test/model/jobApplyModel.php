<?php
require_once('db.php');

function insertJobApplication($applicantId, $first_name, $last_name, $email, $phone_number, $address, $cv_link, $education, $skills, $experience, $availability, $jobId)
{
    $conn = getConnection();
    $sql = "INSERT INTO applications (applicant_id, first_name, last_name, email, phone_number, address, cv_link, education, skills, experience, availability, job_id)
                VALUES ('$applicantId', '$first_name', '$last_name', '$email', '$phone_number', '$address', '$cv_link', '$education', '$skills', '$experience', '$availability','$jobId')";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        die("Error: " . mysqli_error($conn));
    }
}

function checkIfUserApplied($applicantId, $jobId)
{

    $conn = getConnection();
    $sql = "select * from applications where applicant_id='$applicantId' and job_id = '$jobId'";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        return true;
    } else {

        return false;
    }
}

function getAppliedJobs($applicantId)
{
    $conn = getConnection();
    $sql = "SELECT * FROM applications where applicant_id = '$applicantId'";
    // $sql = "SELECT * FROM applications
    //         INNER JOIN jobs ON applications.job_id = jobs.id
    //         WHERE applications.applicant_id = '$applicantId'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $appliedJobs = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $appliedJobs;
    } else {
        mysqli_close($conn);
        die("Error: " . mysqli_error($conn));
    }
}
?>