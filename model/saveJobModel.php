<?php
include_once("db.php");

function viewSavedJobs($userId){
    $con = getConnection();
    $sql = "SELECT * FROM shortlisted_jobs WHERE user_id  = '$userId'";
    $result = mysqli_query($con, $sql);
    $jobs = [];
    while ($row = mysqli_fetch_assoc($result)) {
        foreach($row as $job){
            $sql = "SELECT * FROM jobs WHERE id  = '{$row['job_id']}'";
            $res = mysqli_query($con, $sql);
            while ($rw = mysqli_fetch_assoc($res)) {
                array_push($jobs, $rw);
            }

        }
    }
    
    return $jobs;

    

}

function saveJob($userId, $jobId){
    $con = getConnection();
    $sql = "insert into shortlisted_jobs (
        user_id, 
        job_id
         ) values (
         '$userId',
         '$jobId'
         )";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return ['success' => "Job saved"];
    } else {
        return ['error' => "error saving job"];
    }

}
function unsave($userId, $jobId){
    $con = getConnection();
    $sql = "delete from shortlisted_jobs where  user_id ='$userId' and job_id ='$jobId'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return ['success' => "Job saved"];
    } else {
        return ['error' => "error saving job"];
    }

}

?>
