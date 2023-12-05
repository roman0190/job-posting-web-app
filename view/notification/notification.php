<?php 
session_start();
$userInfo =  $_SESSION['userInfo'] ;
$Name =  $userInfo['name'];
$name = "Roman";  
?>


<html lang="en">
<head>
    <title>Notification</title>
    <link rel="stylesheet" href="../../assets/CSS/notification/notification.css">
</head>
<body>
   <div id="container">

        <header>
            <img src="../../assets/images/chatProfileimage.png" alt="">
            <h1>Notification</h1>
            <span>Login as <a href="../../view/viewProfile.php"><b id="name-linkß"><?php echo $name;?></b></a> </span>
        </header>
        <main id ="viewNotification" onclick="getNotification()">
            <span>Alvi sent you a messege</span>
            <span>Alvi sent you a messege</span>
            <span>Alvi sent you a messege</span>
            <span>Alvi sent you a messege</span>
        </main>
        <footer>
            <h3>@Copyright for Job-Posting-Web-App</h3>
        </footer>

   </div>
</body>
</html>

<script>
    function getNotification(){


        let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/notification/notificationCheck.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(); 

            xhttp.onreadystatechange = function(){

                if(this.readyState == 4 && this.status == 200){

                    document.getElementById('viewNotification').innerHTML = this.responseText;
                    
                }
            }

    }
</script>