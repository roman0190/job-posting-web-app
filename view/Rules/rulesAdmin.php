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
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/Rules/rulesAdmin.css">
</head>
<body>
    <div class="container">
        <table border="1">
            <tr>
                <th colspan="2">
                    <h2 align="left">
                        <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                        &nbsp;&nbsp;&nbsp;&nbsp;MARZ JOB SITE
                    </h2>
                    <h5 align="right">
                        <a href="../TermsOfServices/termsAdmin.php">Terms of Services</a> |
                        <a href="../Auth/logout.php">Sign out</a>
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
                                <td colspan="2" class="button-container">
                                    <button type="button" class="button" onclick="saveRuleChanges()">Save Changes</button>
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
    </div>
    <script src="../../assets/JS/Rules/rulesAll.js"></script>
</body>
</html>
