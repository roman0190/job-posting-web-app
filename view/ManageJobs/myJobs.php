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
    <p>Number of my jobs : <span id="numOfJobs"></span></p>
    <div class="container" id="container">


    </div>
    <p> <a href=" createNewJob.php"><button>Create a Job</button></a> </p>
    <?php include_once("../components/footer.php") ?>
    <script src="../../assets/JS/ManageJobs/myjobs.js"></script>
</body>

</html>