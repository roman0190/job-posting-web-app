<?php

include_once('../../controller/FAQ/faqFetch.php');



?>



<html>

<head>
    <title>Applicant Home</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
    <?php include_once("../components/header.php") ?>
    <center>

        <h1>FAQ :</h1>
        <table>

            <?php
            foreach ($faqs as $faq) {
                echo "
            <tr>
            <td><h5>{$faq['id']}. {$faq['question']}</h5></td>
            </tr>
            <tr>
            <td><p>{$faq['answer']}</p><br></td>
            </tr>";
            }
            ?>
        </table>

    </center>

    <?php include_once("../components/footer.php") ?>
</body>

</html>