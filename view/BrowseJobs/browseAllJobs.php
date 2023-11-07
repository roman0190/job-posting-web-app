<?php
include_once("../../controller/BrowseJobs/browseAllJobsController.php");

?>


<html>

<head>
    <title>All Jobs</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
    <?php include_once("../components/header.php") ?>
    <div class="filter-box">
        <form>
            Search : <input type="text" name="search" value=""><br>
            Job Type <input type="checkbox" name="type" value="internship">Internship <input type="checkbox" name="type" value="part time">Part time<input type="checkbox" name="type" value="full time">Full time
            <br>
            <input type="submit" value="Filter" name="submit">
        </form>
    </div>
    <div class="container">
        <?php
        foreach ($jobs as $job) {
            echo "
            <div class='card'  >
           <h4> {$job['title']}</h4>
           category: {$job['category']}   |   sub category:  {$job['sub_category']}<br>
           position: {$job['job_position']}   |   Application Deadline {$job['application_deadline']} 
           <br>
           <a href='jobDetails.php?id={$job['id']}'>See details</a>
            </div>";
        }
        ?>

    </div>
    <?php include_once("../components/footer.php") ?>
</body>

</html>