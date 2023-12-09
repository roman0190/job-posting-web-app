<?php 
   // require_once('../../controller/Auth/session.php'); 
    require_once("../../model/policyModel.php");
    $policy = policyView();
    $userInfo = [];
 
    if (isset($_COOKIE['userInfo'])) {
        $userInfo = (array) json_decode($_COOKIE['userInfo']);
        $Name =  $userInfo['name']; 
    } else {
        session_start();
        if (isset($_SESSION['userInfo'])) {
            $userInfo = (array)  json_decode($_SESSION['userInfo']);
            $Name =  $userInfo['name']; 
        } else {
            $Name="Guest";
        }
    }
           
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
            <span>Login as <a href="../ManageProfile/viewProfile.php"><b id="name-linkß"><?php echo $Name;?></b></a> </span>
        </header>
        <main>
            <p id="view-policy" ><?php echo $policy["policy"];?></p> 
        </main>
        <footer>
            <h3>@Copyright for Job-Posting-Web-App</h3>
        </footer>
    </div>

   