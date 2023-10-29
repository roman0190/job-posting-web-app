<?php
    session_start();
    $username = $_SESSION['username'];
    require('components/dashboardDesign.php');
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
  
?>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <?php include_once("components/header.php") ?>
        <table border=1 height="100%" width="100%">
            <tr><td><?php echo dashboardHead($username);?></td></tr>
            <tr><td><?php echo createTable($values);?></td></tr>
        </table>
    <?php include_once("components/footer.php") ?>
</body>
</html>
