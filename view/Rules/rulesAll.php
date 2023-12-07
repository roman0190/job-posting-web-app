<?php 
require_once("../../controller/Rules/rulesAllCheck.php");
require_once('../../model/rulesModel.php');

$user = "";

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Rules Page</title>
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
                    <a href="../Auth/logout.php">Sign out</a> |
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
                                
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>



