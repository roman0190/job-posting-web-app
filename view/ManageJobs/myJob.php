<?php
include_once("../../controller/ManageJobs/specificJobController.php");

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
        <a href='editJob.php?id=<?= $job['id'] ?>'>Edit Job</a>


    </div>
    <?php include_once("../components/footer.php") ?>
</body>

</html>