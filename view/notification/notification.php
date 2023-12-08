<?php 
    //require_once('');
    require_once('../../controller/Auth/session.php'); 
    $userInfo = [];
 
    if (isset($_COOKIE['userInfo'])) {
        $userInfo = (array) json_decode($_COOKIE['userInfo']);
    } else {
        session_start();
        if (isset($_SESSION['userInfo'])) {
            $userInfo = (array)  json_decode($_SESSION['userInfo']);
        } else {
            // no userInfo in $_SESSION or $_COOKIE
        }
    }
    $Name =  $userInfo['name'];
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
            <h1>Notifications</h1>
            <span>Login as <a href="../../view/viewProfile.php"><b id="name-linkß"><?php echo $Name;?></b></a> </span>
        </header>
        <main id ="viewNotification">
            <span id="newNotification"></span>
        </main>
        <footer>
            <h3>@Copyright for Job-Posting-Web-App</h3>
        </footer>

   </div>
</body>
</html>

<script>

        function getNotification() {
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/notification/notificationCheck.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send();

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let response = JSON.parse(this.responseText);

                    if ("error" in response) {
                        document.getElementById('newNotification').innerHTML = response.error;
                    } else if ("message" in response) {
                        document.getElementById('newNotification').innerHTML = response.message;
                    } else if ("notifications" in response) {
                        let notifications = response.notifications;
                        let notificationHtml = "";

                        notifications.forEach(notification => {
                            notificationHtml += `<div>
                                ${notification.username} ${notification.message}
                            <button onclick="clearNotification(${notification.id})">Clear</button><br><hr><br>
                            </div>`;
                        });
                        document.getElementById('newNotification').innerHTML = notificationHtml;
                    }
                }
            }
        }
    

        function clearNotification(notificationId) {
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/notification/clearNotification.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("notificationId=" + notificationId);
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let response = JSON.parse(this.responseText);
                    getNotification();
                    alert(response.success);
                   
                }
               
            };
           
        
        }

        getNotification();
        setInterval(getNotification, 500);
    


</script>