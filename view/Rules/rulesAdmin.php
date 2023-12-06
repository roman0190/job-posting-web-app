<?php
// include_once("../../controller/Rules/rulescheck.php");
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
                    <h3 align="center">RULES and REGULATIONS <br> [ADMIN]</h3>
                    <fieldset>
                    <div style="text-align: left;">
        <?php //echo "<p style='font-size: 20px;'>$rule</p>"; ?>
    </div></fieldset>
        
                    <form align="center" action="" method="post">
                        <label for="newRule"></label>
                        <textarea id="newRule" name="newRule" rows="5" cols="100" placeholder="Write your updated content here..."></textarea></textarea>
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
</html> -->

<?php
require_once('../../controller/Rules/rulesAdminCheck.php');
require_once('../../model/rulesModel.php');

//$username = "mitti";
//$currentProfile = getUser($username);

// Fetch RULES
$rules = getRules();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Rules</title>
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

        textarea {
            width: 100%;
            height: 100px;
        }

        #current-profile-picture {
            max-width: 100px;
            max-height: 100px;
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
                <form action="rulesAdminCheck.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th colspan="2"><h2 align="center">Edit Rules</h2></th>
                        </tr>
                        <tr>
                            <td>
                                <label for="R1">Rule 1:</label><hr>
                            </td>
                            <td>
                                <textarea id="R1" name="R1"><?php echo $rules['R1']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="R2">Rule 2:</label><hr>
                            </td>
                            <td>
                                <textarea id="R2" name="R2"><?php echo $rules['R2']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="R3">Rule 3:</label><hr>
                            </td>
                            <td>
                                <textarea id="R3" name="R3"><?php echo $rules['R3']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="R4">Rule 4:</label><hr>
                            </td>
                            <td>
                                <textarea id="R4" name="R4"><?php echo $rules['R4']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="R5">Rule 5:</label><hr>
                            </td>
                            <td>
                                <textarea id="R5" name="R5"><?php echo $rules['R5']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="R6">Rule 6:</label><hr>
                            </td>
                            <td>
                                <textarea id="R6" name="R6"><?php echo $rules['R6']; ?></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <button type="button" onclick="saveRuleChanges()">Save Changes</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p id="error" style="color:red;"></p>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <script src="../../assets/JS/Rules/rulesAll.js"></script>
</body>
</html>
