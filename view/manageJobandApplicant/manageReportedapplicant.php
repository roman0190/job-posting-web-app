<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARZ JOB SITE - Your Job Search Partner</title>
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/manageReport/manageReportedAplicant.css">
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
                $queryApplicants = "SELECT * FROM reported_applicants";
                $resultApplicants = mysqli_query($con, $queryApplicants);

                echo "<h3>Reported Applicants</h3>";
                while ($row = mysqli_fetch_assoc($resultApplicants)) {
                    $query = "SELECT * FROM applications WHERE applicant_id = {$row['applicant_id']}";
                    $res = mysqli_query($con, $query);

                    while ($data = mysqli_fetch_assoc($res)) {
                       
                        echo "Applicant ID: " . $row['applicant_id'] . " | Reported By: " . $row['reported_by'] . " ";
                        echo "<h5>Full Nmae :" . $data['first_name'] . " " . $data['last_name'] . "</h5>";
                        echo "<h5> Email :".$data['email']."</h5>";
                        echo "<h5> Education :".$data['education']."</h5>";
                        echo "<h5> Skills :".$data['skills']."</h5>";
                        echo "<h5> Experience :".$data['experience']."</h5>";
                        
                        echo "<a href='../../controller/manageReport/manageReportedapplicantcheck.php?id=" . $row['id'] . "'>Remove Report</a><br><br>";
                    }
                }
                ?>

                <br>
                <a  href="../reportJobandApplicant/reportJobandApplicant.php">Back to Reported Jobs and Applicants</a>
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
