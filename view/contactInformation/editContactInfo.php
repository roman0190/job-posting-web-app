<?php
    require_once('../../controller/Auth/session.php'); 
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
        <link rel="stylesheet" href="../../assets/CSS/contactInformation/editContactInfo.css">
    </head>
    <body>
        <div id="container">
            <header>
                <img src="../../assets/images/chatProfileimage.png" alt="">
                <h1>Edit Contact Information</h1>
                <span>Login as <a href="../ManageProfile/viewProfile.php"><b id="name-linkß"><?php echo $Name;?></b></a> </span>
            </header>
            <main>
                <label for="email">Email:</label> 
                <input type="email" id="email" name="email" value="<?php echo $contactInfo["email"];?>" placeholder="Enter Email....">  
                <label for="number">Number: </label>
                <input type="number" name="number" id= "number" value = "<?php echo $contactInfo["phone_number"];?>" placeholder="Enter Number...."> 
                <label for="link">Link: </label>
                <input type="link" name="link" id= "link" value = "<?php echo $contactInfo["link"];?>" placeholder="Enter link....">   
                <input type="button" id="save" value="Save" >
                <div id="display">
                    <label for="">Email:</label>
                    <p id = "display_email"></p>
                    <label for="">Number:</label>
                    <p id = "display_number"></p>
                    <label for="">Link:</label>
                    <a href="<p id='display_link' ></p>">Link</a>
                </div>
                <a href="viewContactInfo.php">Contact Information</a>
            </main>
            <footer>
                <h3>@Copyright for Job-Posting-Web-App</h3>
            </footer>
        </div> 
    </body>
</html>


<script src="../../assets/JS/contactInformation/editContactInfo.js"></script>
