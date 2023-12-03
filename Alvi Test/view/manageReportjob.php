<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
</head>

<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="20">
        <tr>
            <td>
                <header>
                    <img src="logo.png" alt="MARZ JOB SITE Logo" style="max-width: 100px; float: left;">
                    <h1 align="center">MARZ JOB SITE</h1>
                    <h4 align="right">
                        <a href="logOut.php">Logout</a>
                    </h4>
                </header>
            </td>
        </tr>
        <tr>
            <td>
                                        <h1>Manage Reported Job</h1>

                            <h2>Reported Jobs</h2>
                            <ul>
                            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Reported Job</title>
</head>
<body>

<?php

$reportedJobs = [
    ['id' => 1, 'title' => 'Reported Job 1', 'details' => 'Details of Reported Job 1'],
    ['id' => 2, 'title' => 'Reported Job 2', 'details' => 'Details of Reported Job 2'],
    
];

if (isset($_GET['job_id'])) {
    $selectedJobId = $_GET['job_id'];

   
    $selectedJob = null;
    foreach ($reportedJobs as $job) {
        if ($job['id'] == $selectedJobId) {
            $selectedJob = $job;
            break;
        }
    }

    if ($selectedJob) {
        
        echo "<h2>Reported Job Details</h2>";
        echo "<p><strong>ID:</strong> {$selectedJob['id']}</p>";
        echo "<p><strong>Title:</strong> {$selectedJob['title']}</p>";
        echo "<p><strong>Details:</strong> {$selectedJob['details']}</p>";

        // Display action buttons (dismiss and delete)
        echo "<p><a href='#' onclick='dismissJob()'>Dismiss</a> | <a href='#' onclick='deleteJob()'>Delete</a></p>";
    } else {
        echo "<p>Invalid job ID</p>";
    }
} else {
    echo "<p>No job selected</p>";
}

?>

<script>
    function dismissJob() {
        alert("Job dismissed");
      
    }

    function deleteJob() {
        alert("Job deleted");
      
    }
</script>

</body>
</html>
 
            </td>
        </tr>


        <tr>
            <td>
                <footer align="center">
                    <p>&copy; 2023 MARZ JOB SITE. All rights reserved.</p>
                </footer>
            </td>
        </tr>
    </table>
</body>

</html>