<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Rules and Regulations - MARZ JOB SITE</title>
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
                        <a href="rulesAll.php">Admin Panel</a> <!-- Link to the admin panel for rule editing -->
                    </h4>
                </header>
            </td>
        </tr>
        <tr>
            <td>
                <h1>RULES and REGULATIONS</h1>
                <p>Welcome to MARZ JOB SITE! Please read these rules carefully before using our website.</p>

                <form action="rulesCheck.php" method="post">
                    <h2>Rule 1: Respectful Communication</h2>
                    <p>Always maintain respectful and professional communication with employers, fellow job seekers, and our support team.</p>
                    <textarea name="rule1_edit" rows="4" cols="50"></textarea><br>

                    <h2>Rule 2: Accurate Information</h2>
                    <p>Provide accurate and up-to-date information in your job listings, resumes, and profile. Misleading or false information is not allowed.</p>
                    <textarea name="rule2_edit" rows="4" cols="50"></textarea><br>

                    <h2>Rule 3: Respectful Communication</h2>
                    <p>Discrimination based on race, gender, religion, or any other characteristic is strictly prohibited. Treat all users equally and with respect.</p>
                    <textarea name="rule3_edit" rows="4" cols="50"></textarea><br>

                    <h2>Rule 4: Accurate Information</h2>
                    <p>Provide accurate and up-to-date information in your job listings, resumes, and profile. Misleading or false information is not allowed.</p>
                    <textarea name="rule4_edit" rows="4" cols="50"></textarea><br>

                    <input type="submit" name="submit" value="Save Rules">
                </form>
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
