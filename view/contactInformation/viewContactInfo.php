<?php 
    require_once("../../model/contactinfoModel.php");
    $contactInfo = contactinfoView();
    $name = "Roman";          
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
                <span>Login as <a href="../../view/viewProfile.php"><b id="name-link"><?php echo $name;?></b></a> </span>
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