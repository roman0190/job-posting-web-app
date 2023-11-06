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
    <div class="container">
        <?php
        foreach ($jobs as $job) {
            echo "
            <a class='card'  href='myJob.php?id={$job['id']}'>
           <h4> {$job['title']}</h4>
           category: {$job['category']}   |   sub category:  {$job['sub_category']}<br>
           position: {$job['job_position']}   |   Application Deadline {$job['application_deadline']} 
            </a>";
        }
        ?>

    </div>
    <?php include_once("../components/footer.php") ?>
</body>

</html>