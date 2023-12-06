<?php
// include_once("../../controller/Terms/termsCheck.php");
// include_once("../../model/termsModel.php");
?>

<!-- <!DOCTYPE html>
<html>

<head>
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
                    MARZ JOB SITE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                </h2>
                <h5 align="right">
                    <a href="../Rules/rulesAdmin.php">Rules and Regulations</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <section>
                    <h3 align="center">TERMS OF SERVICES <br> [ADMIN]</h3>
                    <fieldset>
                        <div style="text-align: left;">
                            <?php //foreach ($terms as $term) {
                                //echo "<p style='font-size: 20px;'>$term</p>";
                            //} ?>
                        </div>
                    </fieldset>

                    <form align="center" action="" method="post">
                        <label for="newTerm"></label>
                        <?php //for ($i = 1; $i <= 6; $i++) { ?>
                            <textarea id="newTerm<?php //echo $i; ?>" name="newTerm[T<?php //echo $i; ?>]" rows="5" cols="100" placeholder="Write your updated content here..."></textarea>
                            <br>
                        <?php //} ?>
                        <input type="submit" value="Update Terms">
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
require_once('../../controller/TermsOfServices/termsAdminCheck.php');
require_once('../../model/termsModel.php');

//$username = "mitti";
//$currentProfile = getUser($username);

// Fetch terms
$terms = getTerms();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Terms</title>
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
                <form action="termsAdminCheck.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th colspan="2"><h2 align="center">Edit Terms</h2></th>
                        </tr>
                        <tr>
                            <td>
                                <label for="T1">Term 1:</label><hr>
                            </td>
                            <td>
                                <textarea id="T1" name="T1"><?php echo $terms['T1']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="T2">Term 2:</label><hr>
                            </td>
                            <td>
                                <textarea id="T2" name="T2"><?php echo $terms['T2']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="T3">Term 3:</label><hr>
                            </td>
                            <td>
                                <textarea id="T3" name="T3"><?php echo $terms['T3']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="T4">Term 4:</label><hr>
                            </td>
                            <td>
                                <textarea id="T4" name="T4"><?php echo $terms['T4']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="T5">Term 5:</label><hr>
                            </td>
                            <td>
                                <textarea id="T5" name="T5"><?php echo $terms['T5']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="T6">Term 6:</label><hr>
                            </td>
                            <td>
                                <textarea id="T6" name="T6"><?php echo $terms['T6']; ?></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <button type="button" onclick="saveTermChanges()">Save Changes</button>
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
    <script src="../../assets/JS/TermsOfServices/termsAll.js"></script>
</body>
</html>
