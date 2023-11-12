<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Save Job for Later</title>
    <style>
        table {
            width: 70%;
            margin: auto;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
    </h2>
    <h2 align="center">MARZ JOB SITE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                <h5 align="right">
                    <a href="../Auth/signIn.php">Sign out</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td colspan="2">
                <form action="saveJob.php" method="post">
                    <table>
                        <tr>
                            <th colspan="2"><h2 align="center">Job Information</h2></th>
                        </tr>
                        <tr>
                            <td>
                                <label for="jobTitle">Job Title:</label><hr>
                            </td>
                            <td>
                                <text id="jobTitle">Software Developer</text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="category">Category:</label><hr>
                            </td>
                            <td>
                                <text id="category">Information Technology</text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jobPosition">Job Position:</label><hr>
                            </td>
                            <td>
                                <text id="jobPosition">Full Stack Developer</text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jobType">Job Type:</label><hr>
                            </td>
                            <td>
                                <text id="jobType">Permanent</text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="requiredSkills">Required Skills:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><hr>
                            </td>
                            <td>
                                <text id="requiredSkills">PHP, JavaScript, MySQL</text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="requiredEducation">Required Education:</label><hr>
                            </td>
                            <td>
                                <text id="requiredEducation">Bachelor's Degree in Computer Science</text><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jobDescription">Job Description:</label><hr>
                            </td>
                            <td>
                                <p id="jobDescription">
                                    We are seeking a highly skilled and motivated Software Developer to join our dynamic team.
                                    As a Full Stack Developer, you will be responsible for designing, developing, and maintaining
                                    web applications.

                                    <br><br>

                                    <b>Key Responsibilities:</b>
                                    <ul>
                                        <li>Develop and maintain web applications using PHP, JavaScript, and MySQL</li>
                                        <li>Perform code reviews to ensure the code quality and adherence to coding standards</li>
                                        <li>Troubleshoot, debug, and optimize code for performance</li>
                                        <li>Stay up-to-date with emerging technologies and industry trends</li>
                                    </ul>

                                    <b>Qualifications:</b>
                                    <ul>
                                        <li>Bachelor's degree in Computer Science or related field</li>
                                        <li>Proven experience in web development with a strong portfolio</li>
                                        <li>Proficiency in PHP, JavaScript, HTML, CSS, and MySQL</li>
                                        <li>Excellent problem-solving and communication skills</li>
                                    </ul>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="button">Save for Later</button>
                                <button type="button">Apply</button>
                                <button type="button">Report</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>
