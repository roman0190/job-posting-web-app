<?php
// include_once("../../model/termsModel.php");

// $terms = getTerms();
?>

<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Terms of Services Page</title>
    <style>
        table { width: 900px; height: 400px; }
        fieldset { padding: 50px; }
    </style>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                </h2>
                <h2 align="center">
                    MARZ JOB SITE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </h2>
                <h5 align="right">
                    <a href="../Rules/rulesAll.php">Rules and Regulations</a> |
                    <a href="../Auth/signIn.php">Sign out</a> |
                    <a href="../ManageProfile/viewProfile.php">Profile</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <h2 align="center">TERMS OF SERVICES</h2>
                <fieldset>
                    <div style="text-align: left;">
                        <?php //foreach ($terms as $term) {
                            //echo "<p style='font-size: 20px;'>$term</p>";
                        //} ?>
                    </div>
                </fieldset>
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
require_once("../../controller/TermsOfServices/termsAllCheck.php");
require_once('../../model/termsModel.php');

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
                <form action="termsAllEdit.php" method="post">
                    <table>
                        <tr>
                            <th colspan="2"><h2 align="center">Terms Of Services</h2></th>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T1">T1:</label><hr> -->
                            </td>
                            <td>
                                <text id="T1"><?php echo $terms["T1"] ?></text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T2">T2:</label><hr> -->
                            </td>
                            <td>
                                <text id="T2"><?php echo $terms["T2"] ?></text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T3">T3:</label><hr> -->
                            </td>
                            <td>
                                <text id="T3"><?php echo $terms["T3"] ?></text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T4">T4:</label><hr> -->
                            </td>
                            <td>
                                <text id="T4"><?php echo $terms["T4"] ?></text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T5">T5:</label><hr> -->
                            </td>
                            <td>
                                <text id="T5"><?php echo $terms["T5"] ?></text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <label for="T6">T6:</label><hr> -->
                            </td>
                            <td>
                                <text id="T6"><?php echo $terms["T6"] ?></text><hr>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
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
