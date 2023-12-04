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
                <h1>Manage Reported Applicant</h1>

                <h2>Reported Applicants</h2>
                <ul>
                    <?php

                    $reportedApplicants = [
                        ['id' => 1, 'title' => 'Reported Applicant 1', 'details' => 'Details of Reported Applicant 1'],
                        ['id' => 2, 'title' => 'Reported Applicant 2', 'details' => 'Details of Reported Applicant 2'],
                    ];

                    if (isset($_GET['applicant_id'])) {
                        $selectedApplicantId = $_GET['applicant_id'];

                        $selectedApplicant = null;
                        foreach ($reportedApplicants as $applicant) {
                            if ($applicant['id'] == $selectedApplicantId) {
                                $selectedApplicant = $applicant;
                                break;
                            }
                        }

                        if ($selectedApplicant) {
                            // Display reported applicant details
                            echo "<h2>Reported Applicant Details</h2>";
                            echo "<p><strong>ID:</strong> {$selectedApplicant['id']}</p>";
                            echo "<p><strong>Title:</strong> {$selectedApplicant['title']}</p>";
                            echo "<p><strong>Details:</strong> {$selectedApplicant['details']}</p>";

                            // Display action buttons (dismiss and delete)
                            echo "<p><a href='#' onclick='dismissApplicant()'>Dismiss</a> | <a href='#' onclick='deleteApplicant()'>Delete</a></p>";
                        } else {
                            echo "<p>Invalid applicant ID</p>";
                        }
                    } else {
                        echo "<p>No applicant selected</p>";
                    }

                    ?>

                </ul>

                <script>
                    function dismissApplicant() {
                        alert("Applicant dismissed");
                    }

                    function deleteApplicant() {
                        alert("Applicant deleted");
                    }
                </script>
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
