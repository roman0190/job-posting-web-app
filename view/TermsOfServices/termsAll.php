<?php 
require_once("../../controller/TermsOfServices/termsAllCheck.php");
require_once('../../model/termsModel.php');

$user = "";
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Terms Page</title>
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/TermsOfServices/termsAll.css">
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
                        <a href="../Auth/logout.php">Logout</a>
                    </h5>
                </th>
            </tr>
            <tr>
                <td>
                    <form action="termsAllCheck.php" method="post">
                        <table>
                            <tr>
                                <th colspan="2"><h2 align="center">Terms Of Services</h2></th>
                            </tr>
                            <tr>
                                <td>
                                    <text id="T1"><?php echo $terms["T1"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <text id="T2"><?php echo $terms["T2"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <text id="T3"><?php echo $terms["T3"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <text id="T4"><?php echo $terms["T4"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <text id="T5"><?php echo $terms["T5"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <text id="T6"><?php echo $terms["T6"] ?></text><hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <a href="../dashboard/commonDashboard.php">Back</a>
                                </td>
                                <!-- <td colspan="2" class="button-container">
                                    <button class="button" href="../dashboard/dashboardApplicant.php">Back</button>
                                </td> -->
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
