<?php
include_once("../../controller/ApplyToJob/jobApplyCheck.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Job Application</title>
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/ApplyToJob/jobApply.css">
</head>

<body class="container">
    <div class="table-container">
        <table>
            <tr>
                <th colspan="2">
                    <h2 align="left">
                        <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                        MARZ JOB SITE
                    </h2>
                    <h5 align="right">
                        <a href="../../Alvi Test/view/nonadminHome.php">Home</a>|
                        <a href="signIn.php">Sign out</a>
                    </h5>
                </th>
            </tr>
            <tr>
                <td>
                    <form action="" method="post">
                        <fieldset>
                            <label>
                                <center>
                                    <h3>Job Application</h3>
                                </center>
                            </label>
                            <label for="first_name">First Name:</label>
                            </html><input type="hidden" name="id" value=<?=$_GET['id'] ?> >
                            <input class="input-field" type="text" name="first_name" required><br><br>
                            <label for="last_name">Last Name:</label>
                            <input class="input-field" type="text" name="last_name" required><br><br>
                            <label for="email">Email:</label>
                            <input class="input-field" type="email" name="email" required><br><br>
                            <label for="phone_number">Phone Number:</label>
                            <input class="input-field" type="number" name="phone_number" required><br><br>
                            <label for="address">Address:</label>
                            <input class="input-field" type="text" name="address" required><br><br>
                            <label for="cv_link">Link to CV/Resume:</label>
                            <input class="input-field" type="text" name="cv_link" required><br><br>
                            <label for="education">Education:</label>
                            <input class="input-field" type="text" name="education" required><br><br>
                            <label for="skills">Skills (Each skill is separated with commas):</label>
                            <input class="input-field" type="text" name="skills" required><br><br>
                            <label for="experience">Work Experience:</label>
                            <select class="select-field" name="experience">
                                <option value="">Select Years of Experience</option>
                                <?php
                                for ($i = 0; $i <= 20; $i++) {
                                    echo "<option value='$i'>$i years</option>";
                                }
                                ?>
                            </select><br><br>
                            <label for="availability">Availability (Choose one):</label>
                            <select class="select-field" name="availability" required>
                                <option value="full-time">Full-Time</option>
                                <option value="part-time">Part-Time</option>
                                <option value="contract">Contract</option>
                            </select><br><br>
                            <hr>

                            <p class="error-message" id="errormess"></p>
                            <div class="button-container">
                                <input class="button" type="submit" name="submit" value="Apply for Job">
                                <input class="button" type="reset" value="Reset">
                            </div>
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <script src="../../assets/JS/ApplyToJob/jobApply.js"></script>
    <script src="../../assets/JS/ApplyToJob/kick.js" type="module"></script>
</body>

</html>

</body>
