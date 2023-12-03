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
                <span>Welcome,<a href="viewprofile.php"><b id='name'>Roman Howladar</b></a></span>
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
                <li><a href="#">Edit Pricay & Policy</a></li>
                <li><a href="#">Edit Contact Information</a></li>
                <li><a href="#">Chat</a></li>
                <li><a href="#">Other</a></li>
            </ul>
        </div>

        <div class="main">
            <p>img</p>
            <p>img</p>
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