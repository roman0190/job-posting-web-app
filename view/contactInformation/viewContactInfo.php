<?php 
    require_once("../../model/contactinfoModel.php");
    session_start();
    $contactInfo = contactinfoView();
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
<html>
    <head>
        <title>Contact Information</title>
        <link rel="stylesheet" href="../../assets/CSS/contactInformation/viewContactInfo.css">
    </head>
    <body>
        <div id="container">
            <header>
                <img src="../../assets/images/chatProfileimage.png" alt="">
                <h1>Contact Information</h1>
                <span>Login as <a href="../../view/viewProfile.php"><b id="name-link"><?php echo $Name;?></b></a> </span>
            </header>
            <main>
                <label for="email">Email:</label> 
                <?php echo $contactInfo["email"];?><br>
                <label for="number">Number: </label>
                <?php echo $contactInfo["phone_number"];?><br>
                <label for="link">Link: </label>
                <a href="<?php echo $contactInfo["link"];?>" id = "link">Facebook</a>
            </main>
            <footer>
                <h3>@Copyright for Job-Posting-Web-App</h3>
            </footer>
        </div> 
    </body>
</html>