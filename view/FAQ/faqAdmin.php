<?php

include_once('../../controller/FAQ/faqAdminController.php');

?>


<html>

<head>
    <title>Applicant Home</title>
    <link rel="stylesheet" href="../../assets/CSS/Common/style.css">
</head>

<body>
    <?php include_once("../components/header.php") ?>
    <center>

        <h1>FAQs</h1>


        <form method="POST" action="" enctype="">

            <table>

                <?php
                foreach ($faqs as $faq) {
                    echo "
            <tr>
            <td><h5>{$faq['id']}. {$faq['question']}</h5></td>
            </tr>
            <tr>
            <td><p>{$faq['answer']}</p><br></td>
            </tr>
            <tr>
            <td><a href='/edit-faq?id=2'> edit</a> <a href='/delete-faq?id=2'> delete</a><br><br></td>
            </tr>
            ";
                }
                ?>
                <tr>

                    <td>
                        <h3>New FAQ :</h3>
                    </td>
                </tr>
                <tr>

                    <td>Question </td>
                </tr>
                <tr>

                    <td><input type="text" name="question" value=""></td>
                </tr>
                <tr>

                    <td>Answer </td>
                </tr>

                <tr>

                    <td><textarea rows="20" name="about" value=""></textarea></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="submit" />
        </form>
    </center>
    <?php include_once("../components/footer.php") ?>
</body>

</html>