<?php
require('../../model/db.php');
require('../../model/jobApplyModel.php');
$applicantId = $_COOKIE["userId"];

$applications = getAppliedJobs($applicantId);

?>
<!DOCTYPE html>
<html>
    
<head>
    <title>View Applied Jobs</title>
</head>

<body>
    <h2>Previously Applied Jobs</h2>

    <div>
        <?php
        foreach($applications as $application){
            echo "<div>
    <table>
    <tr>
        <td>First Name:</td>
        <td>{$application['first_name']}</td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td>{$application['last_name']} </td>
    </tr>
    <tr>
        <td>Email:</td>
        <td> {$application['email']} </td>
    </tr>
    <tr>
        <td>Phone number:</td>
        <td> {$application['phone_number']} </td><hr>
    </tr>
    </table>
            </div>";
        }
        ?>
    </div>
    <a href="../../Alvi Test/view/nonadminHome.php">Go Back</a>
</body>
</html>
