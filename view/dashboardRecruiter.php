<?php
    session_start();
    $username = $_SESSION['username'];
    require('../model/dashboardDesign.php');
    $values = ['<a href="../view/.php">Post Job</a>',
                '<a href="../view/.php">See Own Jobs</a>',
                '<a href="../view/.php">See all Applicants</a>',
                '<a href="../view/.php">View Profile</a>',
                '<a href="../view/.php">Edit Profile</a>',
                '<a href="../view/.php">Change Profile Photo</a>',
                '<a href="../view/.php">Change Password</a>',
                '<a href="../view/.php">Notification</a>',
                '<a href="../view/.php">Contact Information</a>',
                '<a href="../view/.php">Rules and regulation</a>',
                '<a href="../view/.php">FQA</a>',
                '<a href="../view/.php">Terms of Services </a>',
                '<a href="../view/.php">Chat</a>',
            ];
    $row=count($values);;
    $col=1;
?>

<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
<table border=1>
        <tr><td><?php echo dashboardHead($username);?></td></tr>
        <tr><td><?php echo createTable($row,$col, $values);?></td></tr>
    </table>
</body>
</html>
