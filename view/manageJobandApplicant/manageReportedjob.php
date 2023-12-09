
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARZ JOB SITE - Your Job Search Partner</title>
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/manageReport/manageReportedjob.css">
</head>

<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="20">
        <tr>
            <th colspan="2">
                <h2 align="center">
                    <img align="left" src="../../assets/images/logo.png" alt="Company Logo" width="80" height="80">
                    MARZ JOB SITE
                </h2>
            </th>
        </tr>

        <tr>
            <td>
                

                <?php
                include('../../model/db.php');
                $con = getConnection();

                $queryJobs = "SELECT * FROM reported_jobs";
                $resultJobs = mysqli_query($con, $queryJobs);

                echo "<h1>Reported Jobs</h1>";
                while ($row = mysqli_fetch_assoc($resultJobs)) {
                    $query = "SELECT * FROM jobs WHERE id = {$row['id']}";
                    $res = mysqli_query($con, $query);
                    
                    while ($data = mysqli_fetch_assoc($res)) {
                        echo "Job ID: " . $row['job_id'] . "   ||   Reported By: " . $row['reported_by'] . "";
                        
                        echo "<h5> Title :".$data['title']."</h5>";
                        echo "<h5> Category :".$data['category']."</h5>";
                        echo "<h5> Education :".$data['required_education']."</h5>";
                        echo "<h5> Job Respnsibilities :".$data['job_responsibilities']."</h5>";
                        echo "<h5> Application Deadline :".$data['application_deadline']."</h5>";
                        echo "<a href='../../controller/manageReport/manageReportedjobcheck.php?id=" . $row['id'] . "'>Remove Report</a><br><br>";
                      
                        
                    }

                }
                ?>

                <br>
                <a align="center" href="../reportJobandApplicant/reportJobandApplicant.php">Back to Reported Jobs and Applicants</a>
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
