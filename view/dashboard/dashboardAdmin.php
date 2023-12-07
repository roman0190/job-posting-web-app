<?php 
    
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
                <span>Welcome,<a href="viewprofile.php"><b id='name'></b></a></span>
            </div>
           <div class=head-content>
                <h1>Dashboard</h1><h6 id='role'style="text-transform: uppercase;" ></h6>
           </div>
           <div class='logout'>
                <a href="logout.php">logout</a>
           </div>
        </div>

        <div class="nav">
            <ul>
                <li><a href="../privacyPolicy/editPrivacyPolicy.php">Edit Pricay & Policy</a></li>
                <li><a href="../contactInformation/editContactInfo.php">Edit Contact Information</a></li>
                <li><a href="#">Edit Terms & Condition</a></li>
                <li><a href="#">Edit Rules & Regulation</a></li>
                <li><a href="#">Edit FAQ</a></li>
                <li><a href="../chat/chat.php">Chat</a></li>
                <li><a href="#">Notifications</a></li>
            </ul>
        </div>

        <div class="main">
            <p> <a href=".php">View Profile</a></p>
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

<script>

function getValue() {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/dashboard/dashboardCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let userInfo = JSON.parse(this.responseText);
            document.getElementById('name').innerHTML = userInfo.name;
            document.getElementById('role').innerHTML = userInfo.role;
        }
    };
}

document.addEventListener("DOMContentLoaded", function () {
    getValue();

});

</script>