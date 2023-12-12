<?php
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
    $email = $userInfo['email'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/CSS/chat/chat.css">
    <title>My chat</title>
</head>
<body>
    <div id="wrapper">
        <div id="left_pannel">
            <div style="padding: 1px;">
                <img id="profile_image" src="../../assets/images/chatProfileimage.png" alt="">
                <br>
                <span style="font-size: 25px;"><?php echo $Name ?></span>
                <br>
                <span style="font-size: 12px; opacity: 0.5;"><?php echo $email ?></span>
             
                <div >
                    <label for="label_chat" >Chat<img  src="../../assets/images/chatIcon.png" align="right" alt=""></label>
                    <label  onclick="Viewprofile()">Contact Information<img src="../../assets/images/contactIcon.png" align="right" alt=""></label>
                    <label onclick="Logout()" >Logout<img  src="../../assets/images/settingsIcon.png" align="right" alt=""> </label>
                </div>
            </div>
        </div>
        <div id="right_pannel">
            <div id="header">My Chat</div>
            <div id="container" style="display: flex;">

                <div id="inner_left_pannel">
                    <ul id ="name_of_users">
                  
                    </ul>
                </div>
                <input type="radio" name="page_change" id="label_chat" style="display: none;">
                <div id="inner_right_pannel">
                    
                  
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script src="../../assets/JS/chat/chat.js"></script>








