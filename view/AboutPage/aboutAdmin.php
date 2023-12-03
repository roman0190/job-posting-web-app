<?php

include_once('../../model/aboutModel.php');
include_once('../../controller/AboutPage/aboutAdminController.php');

?>



<html>

<head>
    <title>Applicant Home</title>
    <link rel="stylesheet" href="../../assets/CSS/Common/style.css">
</head>

<body>
    <?php include_once("../components/header.php") ?>
    <center>

        <h1>About Us</h1>
        <p><?= $about ?></p>

        <form method="POST" action="" enctype="">
            <h4>Edit to update about page</h4>
            <textarea name="about" rows="20" name="about" value="<?= $about ?>"></textarea><br>
            <input type="submit" name="submit" value="submit" />
        </form>
    </center>

    <?php include_once("../components/footer.php") ?>
</body>

</html>