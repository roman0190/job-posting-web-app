<?php
include_once("../../controller/termsCheck.php");
include_once("../../model/termsModel.php");
?>

<!DOCTYPE html>
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
                            <?php foreach ($terms as $term) {
                                echo "<p style='font-size: 20px;'>$term</p>";
                            } ?>
                        </div>
                    </fieldset>

                    <form align="center" action="" method="post">
                        <label for="newTerm"></label>
                        <?php for ($i = 1; $i <= 6; $i++) { ?>
                            <textarea id="newTerm<?php echo $i; ?>" name="newTerm[T<?php echo $i; ?>]" rows="5" cols="100" placeholder="Write your updated content here..."></textarea>
                            <br>
                        <?php } ?>
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

</html>
