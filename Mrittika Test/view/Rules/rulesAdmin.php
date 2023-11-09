<?php
include_once("../../controller/rulescheck.php");
include_once("../../model/rulesModel.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rules and Regulations Page</title>
    <style>
        table {width: 700px; height: 400px;}
        fieldset {padding: 50px;}
    </style>
</head>
<body>
    <table border="1" align="center" >
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                </h2>
                <h2 align="center">
                    MARZ JOB SITE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                </h2>
                <h5 align="right">
                <a href="../TermsOfServices/termsAdmin.php">Terms of Services</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <section>
                    <h2 align="center">RULES and REGULATIONS <br> [ADMIN]</h2>
                    <div style="text-align: center;">
        <?php echo "<p style='font-size: 20px;'>$rule</p>"; ?>
    </div>
        
                    <form align="center" action="" method="post">
                        <label for="newRule"></label>
                        <textarea id="newRule" name="newRule" rows="5" cols="100"></textarea>
                        <br>
                        <input type="submit" value="Update Rule">
                    </form>
                </section>
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
