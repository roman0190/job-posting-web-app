<?php
require_once('../../controller/Auth/session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../assets/CSS/dashboard/dashboardRecruiter.css">
    <title>Job Posting Recruiter Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class='user-info'>
                <img src="../../assets/images/logo.png" alt="">
                <span>Welcome,<a href="../ManageProfile/viewProfile.php"><b id='name'></b></a></span>
            </div>
            <div class=head-content>
                <h1>Dashboard</h1>
                <h6 id='role' style="text-transform: uppercase;"></h6>
            </div>
            <div class='logout'>
                <a href="../Auth/logout.php">logout</a>
            </div>
        </div>

        <div class="nav">
            <ul>
                <li><a href="../privacyPolicy/viewPrivacyPolicy.php">Privacy & Policy</a></li>
                <li><a href="../contactInformation/viewContactInfo.php">Contact Information</a></li>
                <li><a href="../TermsOfServices/termsAll.php">Terms Of Services</a></li>
                <li><a href="../Rules/rulesAll.php">Rules & Regulation</a></li>
                <li><a href="../FAQ/faq.html">FAQ</a></li>
                <li><a href="../AboutPage/about.html">About us</a></li>
                <li><a href="../chat/chat.php">Chat</a></li>
                <li><a href="../notification/notification.php">Notifications</a></li>
            </ul>
        </div>

        <div class="main">
            <p> <a href="../ManageProfile/viewProfile.php">View Profile</a></p>
            <!-- <p> <a href="../SeeApplicants/allApplications.html">View All Applicants</a></p> -->
            <p> <a href="../ManageJobs/myJobs.php">View All Jobs</a></p>
            <p> <a href="../ManageJobs/createNewJob.php">Create new Jobs</a></p>
            <p> <a href="../Event/userEvent.php">View Posted Event</a></p>
        </div>

        <div class="footer">
            @Copyright Job-posting-web-app
        </div>

    </div>
</body>

</html>
<script src="../../assets/JS/dashboard/dashboardRecruiter.js"></script>