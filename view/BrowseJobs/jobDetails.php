<?php
include_once("../../controller/BrowseJobs/jobDetailsController.php");

?>
<html>

<head>
    <title>My Job</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
    <?php include_once("../components/header.php") ?>

    <div class="container">








        <h4> <?= $job['title'] ?></h4>
        Category: <?= $job['category'] ?> | sub category: <?= $job['sub_category'] ?><br>
        Position: <?= $job['job_position'] ?> | Application Deadline <?= $job['application_deadline'] ?>
        <br>
        Job Type : <?= $job['job_type'] ?> | Job Location <?= $job['job_location'] ?> <br>
        Required Skills : <?= $job['required_skills'] ?> |
        Required Education: <?= $job['required_education'] ?> |
        Required Experience : <?= $job['required_experience'] ?> <br>
        <b>Job Description:</b>
        <p> <?= $job['job_description'] ?> </p>
        <b>Job Responsibilities </b>
        <p> <?= $job['job_description'] ?> </p>

        <br>
        <p><a href='../ApplyToJob/apply.php?id=<?= $job['id'] ?>'>Apply</a> |
            <a href='../Report/reportJob.php?id=<?= $job['id'] ?>'>Report</a>
        </p>


    </div>
    <?php include_once("../components/footer.php") ?>
</body>

</html>