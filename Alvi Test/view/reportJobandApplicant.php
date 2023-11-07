<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="20">
    <tr>
        <td>
            <header>
                <img src="logo.png" alt="MARZ JOB SITE Logo" style="max-width: 100px; float: left;">
                <h1 align="center">MARZ JOB SITE</h1>
                <h4 align="right">
                   <a href="logOut.php">Logout</a>
                </h4>
            </header>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Reported Jobs</h3>
            <ul>
                <?php
                // Fetch reported jobs from your database and replace this example
                $reportedJobs = [
                    ['id' => 1, 'title' => 'Job Title 1'],
                    ['id' => 2, 'title' => 'Job Title 2'],
                    // Add more reported jobs here
                ];

                foreach ($reportedJobs as $job) {
                    echo "<li><a href='manageJobReport.php?job_id={$job['id']}'>{$job['title']}</a></li>";
                }
                ?>
            </ul>
       
            <h3>Reported Applicants</h3>
            <ul>
                <?php
                // Fetch reported applicants from your database and replace this example
                $reportedApplicants = [
                    ['id' => 1, 'name' => 'Applicant Name 1'],
                    ['id' => 2, 'name' => 'Applicant Name 2'],
                    // Add more reported applicants here
                ];

                foreach ($reportedApplicants as $applicant) {
                    echo "<li><a href='manageApplicantReport.php?applicant_id={$applicant['id']}'>{$applicant['name']}</a></li>";
                }
                ?>
            </ul>
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
