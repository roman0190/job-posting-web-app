<?php 
    require_once("../../model/policyModel.php");
    session_start();
    $policy = policyView();
    $userInfo =  $_SESSION['userInfo'] ;
    $Name =  $userInfo['name'];
    $name = "Roman";          
?>

<head>
    <title>Privacy & Policy</title>
    <link rel="stylesheet" href="../../assets/CSS/privacyPolicy/viewPrivacyPolicy.css">
</head>
<body>
    <div id="container">
        <header>
            <img src="../../assets/images/chatProfileimage.png" alt="">
            <h1>View Privacy & Policy</h1>
            <span>Login as <a href="../../view/viewProfile.php"><b id="name-linkß"><?php echo $Name;?></b></a> </span>
        </header>
        <main>
            <p id="view-policy" ><?php echo $policy["policy"];?></p> 
        </main>
        <footer>
            <h3>@Copyright for Job-Posting-Web-App</h3>
        </footer>
    </div>
