<?php 
//require_once("../../controller/Rules/rulesAllCheck.php");
require_once('../../model/rulesModel.php');

$user = "";
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Rules Page</title>
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/Rules/rulesAll.css">
</head>
<body>
    <div class="container">
        <table border="1">
            <tr>
                <th colspan="2">
                    <h2 align="left">
                        <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MARZ JOB SITE
                    </h2>
                    <h5 align="right">
                        <a href="../Auth/logout.php">Logout</a> |
                        <a href="../TermsOfServices/termsAll.php">Terms of Services</a>
                    </h5>
                </th>
            </tr>
            <tr>
                <td>
                    <form action="" method="post">
                        <table>
                            <tr>
                                <th colspan="2"><h2 align="center">Rules and Regulations</h2></th>
                            </tr>
                            <tr>
                                <td>
                                    <text id="R1"><?php echo $rules["R1"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <text id="R2"><?php echo $rules["R2"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <text id="R3"><?php echo $rules["R3"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <text id="R4"><?php echo $rules["R4"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <text id="R5"><?php echo $rules["R5"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <text id="R6"><?php echo $rules["R6"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <a href="../dashboard/dashboardApplicant.php">Back</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
