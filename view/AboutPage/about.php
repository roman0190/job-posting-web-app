<?php

include_once('../../controller/AboutPage/aboutFetch.php');



?>



<html>

<head>
    <title>Applicant Home</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
    <?php include_once("../components/header.php") ?>
    <center>

        <h1>About Us</h1>
        <p><?= $about ?></p>
    </center>
    <?php include_once("../components/footer.php") ?>
</body>

</html>