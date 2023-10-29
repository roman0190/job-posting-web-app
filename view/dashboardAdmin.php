<?php
    session_start();
    $username = $_SESSION['username'];
    require('../model/dashboardDesign.php');
    $values = ['<a href="../view/.php">Reported job posts</a>',
                '<a href="../view/.php">Reported applicants</a>',
                '<a href="../view/.php">Post Event</a>',
                '<a href="../view/.php">Edit privacy policy</a>',
                '<a href="../view/.php">View Notification</a>',
                '<a href="../view/.php">Edit Contact Information</a>',
                '<a href="../view/.php">Edit Rules and regulation</a>',
                '<a href="../view/.php">Edit FQA</a>',
                '<a href="../view/.php">Edit Terms of Services </a>',
                '<a href="../view/.php">Chat</a>',
            ];
    $row=count($values);
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
