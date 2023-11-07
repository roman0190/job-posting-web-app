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


                <div class="container">
                    <?php
                    foreach ($jobs as $job) {
                        echo "
            <div class='card'  >
           <h4> {$job['title']}</h4>
           category: {$job['category']}   |   sub category:  {$job['sub_category']}<br>
           position: {$job['job_position']}   |   Application Deadline {$job['application_deadline']} 
           <br>
           <a href='jobDetails.php?id={$job['id']}'>See details</a>
            </div>";
                    }
                    ?>

                </div>


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