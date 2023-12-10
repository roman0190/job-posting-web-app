<?php
include_once("../../controller/SaveJobForLater/savedJobCheck.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Save Job for Later</title>
    <style>
        table {
            width: 70%;
            margin: auto;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <a href="../dashboard/dashboardApplicant.php">
                    <img align="left" src="logo.png" alt="Company Logo" width="100" height="80" >
    </a>
                </h2>
                <h2 align="center">MARZ JOB SITE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                <h5 align="right">
                    <a href="../Auth/signIn.php">Sign out</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td colspan="2">
                <form action="saveJob.php" method="post">
                    <table>
                        <tr>
                            <th colspan="2"><h2 align="center">Job Information</h2></th>
                        </tr>
                        <?php
                    if(sizeof($jobs)==0){
                        echo "<tr><td>No jobs saved.</td></tr>";
                    }

                            foreach ($jobs as $job) {
                                echo "<tr>";
    echo "<td colspan='2'>";
    echo "<label for='jobTitle'>Job Title:</label><hr>";
    echo "<text id='jobTitle'>" . $job['title'] . "</text><hr>";
    echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><label for='category'>Category:</label><hr></td>";
    echo "<td><text id='category'>" . $job['category'] . "</text><hr></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><label for='jobPosition'>Job Position:</label><hr></td>";
    echo "<td><text id='jobPosition'>" . $job['job_position'] . "</text><hr></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><label for='jobType'>Job Type:</label><hr></td>";
    echo "<td><text id='jobType'>" . $job['job_type'] . "</text><hr></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><label for='requiredSkills'>Required Skills:</label><hr></td>";
    echo "<td><text id='requiredSkills'>" . $job['required_skills'] . "</text><hr></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><label for='requiredEducation'>Required Education:</label><hr></td>";
    echo "<td><text id='requiredEducation'>" . $job['required_education'] . "</text><hr></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><label for='requiredExperience'>Required Experience:</label><hr></td>";
    echo "<td><text id='requiredExperience'>" . $job['required_experience'] . "</text><hr></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><label for='jobLocation'>Job Location:</label><hr></td>";
    echo "<td><text id='jobLocation'>" . $job['job_location'] . "</text><hr></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><label for='jobResponsibilities'>Job Responsibilities:</label><hr></td>";
    echo "<td><p id='jobResponsibilities'>" . $job['job_responsibilities'] . "</p></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><label for='tags'>Tags:</label><hr></td>";
    echo "<td><text id='tags'>" . $job['tags'] . "</text><hr></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><label for='applicationDeadline'>Application Deadline:</label><hr></td>";
    echo "<td><text id='applicationDeadline'>" . $job['application_deadline'] . "</text><hr></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><label for='jobPoster'>Job Poster:</label><hr></td>";
    echo "<td><text id='jobPoster'>" . $job['job_poster'] . "</text><hr></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><label for='jobPoster'>Job Poster:</label><hr></td>";
    echo "<td>
    
    <a href='../ApplyToJob/jobApply.php?id={$job['id']}'> <button type='button'  >Apply</button></a></td>";
    echo "</tr>";
}

?>
                      
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
<script src='../../assets/JS/SaveJobForLater/saveJob.js'></script>
</html>
