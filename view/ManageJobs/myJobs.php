<?php
include_once("../../controller/ManageJobs/allJobsController.php");

?>
<html>

<head>
    <title>My Jobs</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
    <?php include_once("../components/header.php") ?>
    <p> Number of Jobs : <?= sizeof($jobs) ?></p>
    <div class="container">
        <?= sizeof($jobs) == 0 ? "---" : ""  ?>
        <?php
        foreach ($jobs as $job) {
            echo "
            <div class='card' >
            <h4> {$job['title']}</h4>
            category: {$job['category']}   |   sub category:  {$job['sub_category']}<br>
            position: {$job['job_position']}   |   Application Deadline {$job['application_deadline']} 
            <a href='myJob.php?id={$job['id']}'>See details</a>
            </div>";
        }
        ?>

    </div>
    <p> <a href="createNewJob.php"><button>Create a Job</button></a> </p>
    <?php include_once("../components/footer.php") ?>
</body>

</html>