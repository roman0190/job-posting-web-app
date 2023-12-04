<?php
include_once("../../controller/ManageJobs/allJobsController.php");

?>

<!DOCTYPE html>
<html>

<head>
    <title>My Jobs</title>
    <link rel="stylesheet" href="../../assets/CSS/Common/style.css">
</head>

<body>
    <header style="width: 100%;height: 100px; background: #f0f0f0; display: flex; align-items: center; justify-content: space-between; border-bottom: solid black 3px; margin-bottom: 50px;">

        <a href="../Auth/homePage.php"> <img src="../../assets/images/logo.png" alt="marz" style="width: 100px; height: 100px; object-fit: contain;" /></a>
        <div>links</div>


    </header>
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





</body>

</html>