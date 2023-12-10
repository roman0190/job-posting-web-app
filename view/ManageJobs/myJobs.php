<?php
include_once("../../controller/ManageJobs/allJobsController.php");

?>

<!DOCTYPE html>
<html>

<head>
    <title>My Jobs</title>
    <link rel="stylesheet" href="../../assets/CSS/Common/style.css">
    <link rel="stylesheet" href="../../assets/CSS/dashboard/dashboardApplicant.css" />
</head>

<body>
    <header class="header" id="header"></header>
    <main>
        <p>Number of my jobs : <span id="numOfJobs"></span></p>
        <div class="container" id="container">


        </div>
        <p> <a href=" createNewJob.php"><button>Create a Job</button></a> </p>

    </main>
    <footer style="width: 100%; height:200px; background: #f0f0f0; margin-top: 50px;">
        <hr>

    </footer>
    <script src="../../assets/JS/ManageJobs/myjobs.js"></script>

    <script src="../../assets/JS/Header/generateHeader.js" type="module"></script>



</body>

</html>