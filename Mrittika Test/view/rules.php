<?php
require_once('../model/model.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rules and Regulations - MARZ JOB SITE</title>
</head>
<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>
                <header>
                    <img src="logo.png" alt="MARZ JOB SITE Logo" style="max-width: 100px; float: left;">
                    <h1 align="center">MARZ JOB SITE</h1>
                    <h4 align="right">
                        <a href="../../Alvi Test/view/nonadminHome.php">Home</a>
                    </h4>
                </header>
            </td>
        </tr>
        <tr>
            <td>
                <h1>RULES and REGULATIONS</h1>
                <p>Welcome to MARZ JOB SITE!</p>

                <?php
                // Include your user authentication logic here and determine if the user is an admin.
                $isAdmin = checkIfUserIsAdmin();

                // Display the rules
                $rules = getRules();
                foreach ($rules as $rule) {
                    echo "<h2>Rule " . $rule['id'] . ": " . $rule['rule'] . "</h2>";

                    // Display edit and save buttons for the admin
                    if ($isAdmin) {
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='rule_id' value='" . $rule['id'] . "'>";
                        echo "<textarea name='new_rule_text' rows='4' cols='50'>" . $rule['rule'] . "</textarea>";
                        echo "<input type='submit' name='edit_rule' value='Edit Rule'>";
                        echo "<input type='submit' name='save_changes' value='Save Changes'>";
                        echo "</form>";
                    }
                }
                ?>
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
