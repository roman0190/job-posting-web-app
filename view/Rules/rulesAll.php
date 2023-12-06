<?php
// include_once("../../controller/Rules/rulesCheck.php");
// include_once("../../model/rulesModel.php");
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rules and Regulations Page</title>
    <style>
        table {width: 900px; height: 400px;}
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
                    MARZ JOB SITE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </h2>
                <h5 align="right">
                <a href="../TermsOfServices/termsAll.php">Terms of Services</a> |
                <a href="../Auth/signIn.php">Sign out</a> |
                <a href="../ManageProfile/viewProfile.php">Profile</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <p align="center">
                    
                </p>
                <h2 align="center">RULES and REGULATIONS</h2>
                <fieldset>
                <div style="text-align: left;">
        <?php //echo "<p style='font-size: 20px;'>$rule</p>"; ?>
    </div></fieldset>
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
</html> -->

<?php 
require_once("../../controller/Rules/rulesAllCheck.php");
require_once('../../model/rulesModel.php');

$user = ""; // Replace with actual user retrieval logic

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
            <td colspan="2">
                <form action="" method="post">
                    <table>
                        <tr>
                            <th colspan="2"><h2 align="center">Rules and Regulations</h2></th>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T1">T1:</label><hr> -->
                            </td>
                            <td>
                                <text id="R1"><?php echo $rules["R1"] ?></text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T2">T2:</label><hr> -->
                            </td>
                            <td>
                                <text id="R2"><?php echo $rules["R2"] ?></text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T3">T3:</label><hr> -->
                            </td>
                            <td>
                                <text id="R3"><?php echo $rules["R3"] ?></text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T4">T4:</label><hr> -->
                            </td>
                            <td>
                                <text id="R4"><?php echo $rules["R4"] ?></text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T5">T5:</label><hr> -->
                            </td>
                            <td>
                                <text id="R5"><?php echo $rules["R5"] ?></text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T6">T6:</label><hr> -->
                            </td>
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


