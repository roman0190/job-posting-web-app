<?php
if (isset($_POST['submit'])) {
    $error_message = '';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $cv_link = $_POST['cv_link'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];
    $experience = $_POST['experience'];
    $availability = $_POST['availability'];

    if ($first_name == '') {
        $error_message .= "You must fill in your First Name! <br>";
    }
    if ($last_name == '') {
        $error_message .= "You must fill in your Last Name! <br>";
    }
    if ($email == '') {
        $error_message .= "You must fill in your Email! <br>";
    }
    if ($phone_number == '') {
        $error_message .= "You must fill in your phone_number Number! <br>";
    }
    if ($address == '') {
        $error_message .= "You must fill in your Address! <br>";
    }
    if ($cv_link == '') {
        $error_message .= "You must provide a link to your CV/Resume! <br>";
    }

    if (empty($error_message)) {

        setcookie('first_name', $first_name, time() + (86400 * 30), "/");
        setcookie('last_name', $last_name, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        setcookie('phone_number', $phone_number, time() + (86400 * 30), "/");
        setcookie('address', $address, time() + (86400 * 30), "/");
        setcookie('cv_link', $cv_link, time() + (86400 * 30), "/");
        setcookie('education', $education, time() + (86400 * 30), "/");
        setcookie('skills', $skills, time() + (86400 * 30), "/");
        setcookie('experience', $experience, time() + (86400 * 30), "/");
        setcookie('availability', $availability, time() + (86400 * 30), "/");

        header('location: rulesAll.php');
    }
}
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
                    <img align="left" src="logo.png" alt="Company Logo" width="80" height="80">
                    MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="nonadminHome.php">Home</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <form action="../controller/jobApplyCheck.php" method="post">
                    <fieldset>
                        <legend><center><h3>Job Application</h3></center></legend>
                        <label for="first_name">First Name:</label>
                        <input type="text" name="first_name" required><br><br>
                        <label for="last_name">Last Name:</label>
                        <input type="text" name="last_name" required><br><br>
                        <label for="email">Email:</label>
                        <input type="email" name="email" required><br><br>
                        <label for="phone_number">Phone Number:</label>
                        <input type="number" name="phone_number" required><br><br>
                        <label for="address">Address:</label>
                        <input type="text" name="address" required><br><br>
                        <label for="cv_link">Link to CV/Resume:</label>
                        <input type="text" name="cv_link" required><br><br>
                        <label for="education">Education:</label>
                        <textarea name="education" rows="3" required></textarea><br><br>
                        <label for="skills">Skills (Three spaces, separate with commas):</label>
                        <textarea name="skills" rows="3" required></textarea><br><br>
                        <label for="experience">Work Experience:</label>
                        <select name="experience">
                            <option value="">Select Years of Experience</option>
                            <?php
                            for ($i = 0; $i <= 20; $i++) {
                                echo "<option value='$i'>$i years</option>";
                            }
                            ?>
                        </select><br><br>
                        <label for="availability">Availability (Choose one):</label>
                        <select name="availability" required>
                            <option value="full-time">Full-Time</option>
                            <option value="part-time">Part-Time</option>
                            <option value="contract">Contract</option>
                        </select><br><br>
                        <input type="submit" name="submit" value="Apply for Job">
                        <input type="reset" value="Reset">
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
