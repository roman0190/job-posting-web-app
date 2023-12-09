<?php 
    //require_once('');
    require_once('../../controller/Auth/session.php'); 
    $userInfo = [];
 
    if (isset($_COOKIE['userInfo'])) {
        $userInfo = (array) json_decode($_COOKIE['userInfo']);
    } else {
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
            <span>Login as <a href="../ManageProfile/viewProfile.php"><b id="name-linkß"><?php echo $Name;?></b></a> </span>
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

<script src="../../assets/JS/notification/notification.js"></script>