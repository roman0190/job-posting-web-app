<?php 
     require_once('../../controller/Auth/session.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../assets/CSS/dashboard/dashboardAdmin.css">
    <title>Job Posting Admin Dashboard</title>
</head>
<body>
  <div class="container">
        <div class="header">
            <div class='user-info'>
                <img src="../../assets/images/profilePicture.jpg" alt="">
                <span>Welcome,<a href="../ManageProfile/viewProfile.php"><b id='name'></b></a></span>
            </div>
           <div class=head-content>
                <h1>Dashboard</h1><h6 id='role'style="text-transform: uppercase;" ></h6>
           </div>
           <div class='logout'>
                <a href="../Auth/logout.php">logout</a>
           </div>
        </div>

        <div class="nav">
            <ul>
                <li><a href="../LandingPage/adminHome.php">Edit Home</a></li>
                <li><a href="../privacyPolicy/editPrivacyPolicy.php">Edit Privacy & Policy</a></li>
                <li><a href="../contactInformation/editContactInfo.php">Edit Contact Information</a></li>
                <li><a href="../TermsOfServices/termsAdmin.php">Edit Terms Of Services</a></li>
                <li><a href="../Rules/rulesAdmin.php">Edit Rules & Regulation</a></li>
                <li><a href="#">Edit FAQ</a></li>
                <li><a href="../chat/chat.php">Chat</a></li>
                <li><a href="../notification/notification.php">Notifications</a></li>
            </ul>
        </div>

        <div class="main">
        <p> <a href="../ManageProfile/viewProfile.php">View Profile</a></p>
            <p> <a href=".php">View Reported Jobs</a></p>
            <p> <a href=".php">View Reported Applicant</a></p>
            <p> <a href="../Event/adminEvent.php">Event</a></p>
           
        </div>
        
        <div class="footer">
            @Copyright Job-posting-web-app
        </div>    
</div>
</body>
</html>

<script src="../../assets/JS/dashboard/dashboardAdmin.js" ></script>