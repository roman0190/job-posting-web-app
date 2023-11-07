<?php

include_once("db.php");




function postJob(
    $title,
    $category,
    $subCategory,
    $position,
    $skills,
    $education,
    $experience,
    $type,
    $location,
    $description,
    $responsibilities,
    $tags,
    $deadline
) {

    $postTime = date("d/m/Y, h:i:sa");
    // $poster=$_COOKIE['user']['id'];
    $poster = 1;
    $con = getConnection();



    $sql = "insert into jobs (
        title,
        category,
        sub_category,
        job_position,
        required_skills,
        required_education,
        required_experience,
        job_type,
        job_location,
        job_description,
        job_responsibilities,
        tags,
        application_deadline,
        post_time,
        job_poster
        
        ) values (
        
        '{$title}',
        '{$category}',
        '{$subCategory}',
        '{$position}',
        '{$skills}',
        '{$education}',
        '{$experience}',
        '{$type}',
        '{$location}',
        '{$description}',
        '{$responsibilities}',
        '{$tags}',
        '{$deadline}',
        '{$postTime}',
        '{$poster}'

    )";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: ./myJobs.php");
    } else {
        echo "error";
    }
}
function editJob(
    $id,
    $title,
    $category,
    $subCategory,
    $position,
    $skills,
    $education,
    $experience,
    $type,
    $location,
    $description,
    $responsibilities,
    $tags,
    $deadline,
) {


    $con = getConnection();

    $sql = "UPDATE jobs SET 
        title='{$title}',
        category='{$category}',
        sub_category='{$subCategory}',
        job_position='{$position}',
        required_skills='{$skills}',
        required_education='{$education}',
        required_experience='{$experience}',
        job_type='{$type}',
        job_location='{$location}',
        job_description='{$description}',
        job_responsibilities='{$responsibilities}',
        tags='{$tags}',
        application_deadline='{$deadline}'
        
        WHERE id={$id}";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: ./myJobs.php");
    } else {
        echo "error";
    }
}





function fetchAllJobsForOneRecruiter($userId)
{
    $con = getConnection();
    $sql = "select * from jobs where job_poster={$userId}";
    $result = mysqli_query($con, $sql);
    $jobs = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($jobs, $row);
    }

    return $jobs;
}

function fetchAllJobs()
{
    $con = getConnection();
    $sql = "select * from jobs";
    $result = mysqli_query($con, $sql);
    $jobs = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($jobs, $row);
    }

    return $jobs;
}


function fetchOneJob($id)
{
    $con = getConnection();
    $sql = "select * from jobs where id = {$id}";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "Invalid Job";
        return false;
    }
}

?>
<html>

</html>