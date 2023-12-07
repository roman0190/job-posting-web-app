<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reported Jobs</title>
    <link rel="stylesheet" href="../../assets/CSS/manageReport/manageReportedjob.css">

</head>
<body>
    <h2>Manage Reported Jobs</h2>

    <?php
    include ('../../model/db.php');
    $con = getConnection();

    // Fetch and display reported jobs
    $queryJobs = "SELECT * FROM reported_jobs";
    $resultJobs = mysqli_query($con, $queryJobs);
    
    echo "<h3>Reported Jobs</h3>";
    while ($row = mysqli_fetch_assoc($resultJobs)) {
        echo "Job ID: " . $row['job_id'] . " | Reported By: " . $row['reported_by'] . " | ";
        echo "<a href='../../controller/manageReport/manageReportedjobcheck.php?id=" . $row['id'] . "'>Remove Report</a><br>";
    }
    ?>

    <br>
    <a href="../reportJobandApplicant/reportJobandApplicant.php">Back to Reported Jobs and Applicants</a>

</body>
</html>
