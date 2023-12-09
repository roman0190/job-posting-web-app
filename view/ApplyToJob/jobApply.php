<?php
include_once("../../controller/ApplyToJob/jobApplyCheck.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Job Application</title>
</head>

<body>
    <table border="1" align="center">
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
                        <label for="first_name">First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="hidden" name="id" value=<?=$_GET['id'] ?> ><br><br>
                        <input type="text" name="first_name" required><br><br>
                        <label for="last_name">Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="last_name" required><br><br>
                        <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="email" name="email" required><br><br>
                        <label for="phone_number">Phone Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="number" name="phone_number" required><br><br>
                        <label for="address">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="address" required><br><br>
                        <label for="cv_link">Link to CV/Resume:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="cv_link" required><br><br>
                        <label for="education">Education:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="education" required><br><br>
                        <label for="skills">Skills <br>(Each skill is separated with commas):</label>
                        <input type="text" name="skills" required><br><br>
                        <label for="experience">Work Experience:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <select name="experience">
                            <option value="">Select Years of Experience</option>
                            <?php
                            for ($i = 0; $i <= 20; $i++) {
                                echo "<option value='$i'>$i years</option>";
                            }
                            ?>
                        </select><br><br>
                        <label for="availability">Availability (Choose one):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <select name="availability" required>
                            <option value="full-time">Full-Time</option>
                            <option value="part-time">Part-Time</option>
                            <option value="contract">Contract</option>
                        </select><br><br><hr>
                        <!-- <p style="color: red;"><?= $error_message ?></p> -->
                        <p style="color:red" id = "errormess"><?= $error_message ?></p>
                        <input type="submit" name="submit" value="Apply for Job">
                        <input type="reset" value="Reset">
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
    <script src="../../assets/JS/ApplyToJob/jobApply.js"></script>
</body>
</html>