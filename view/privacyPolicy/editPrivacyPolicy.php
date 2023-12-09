<?php 
    require_once('../../controller/Auth/session.php'); 
    require_once("../../model/policyModel.php");
    session_start();
    $policy = policyView();
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
    <title>Privacy & Policy</title>
    <link rel="stylesheet" href="../../assets/CSS/privacyPolicy/editPrivacyPolicy.css">
</head>
<body>
    <div id="container">
        <header>
            <img src="../../assets/images/chatProfileimage.png" alt="">
            <h1>Edit Privacy & Policy</h1>
            <span>Login as <a href="../ManageProfile/viewProfile.php"><b id="name-linkß"><?php echo $Name;?></b></a> </span>
        </header>
        <main>
            <label for="policy-input">Policy: </label> <br>
            <textarea id="policy-input"><?php echo $policy["policy"];?></textarea><br><br>
            <label><hr> <a href="viewPrivacyPolicy.php" style="color:green;" >Privacy & Policy</a> <b> live Preview:</b></label> <br><br>
            <label id ="preview" style="color:gray;"></label>
        </main>
        <footer>
            <h3>@Copyright for Job-Posting-Web-App</h3>
        </footer>
    </div>
</body>
</html>

<script src="../../assets/JS/privacyPolicy/editPrivacyPolicy.js"></script>