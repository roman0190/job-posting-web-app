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
        category: <?= $job['category'] ?> | sub category: <?= $job['sub_category'] ?><br>
        position: <?= $job['job_position'] ?> | Application Deadline <?= $job['application_deadline'] ?>

        <br>
        <p><a href='../ApplyToJob/apply.php?id=<?= $job['id'] ?>'>Apply</a> |
            <a href='../ReportJob/report.php?id=<?= $job['id'] ?>'>Report</a>
        </p>


    </div>
    <?php include_once("../components/footer.php") ?>
</body>

</html>