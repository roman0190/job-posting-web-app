<?php 
require_once("../../controller/TermsOfServices/termsAllCheck.php");
require_once('../../model/termsModel.php');

$user = "";
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Terms Page</title>
    <style>
        table {
            width: 700px;
            margin: auto;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                    &nbsp;&nbsp;&nbsp;&nbsp;MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="../Auth/signIn.php">Sign out</a>
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
                            <a href="../LandingPage/nonadminHome.php">Back</a>
                                <!-- <button type="submit">Edit Terms</button> -->
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>

