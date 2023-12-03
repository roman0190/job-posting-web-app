<?php 
    require_once("../../model/contactinfoModel.php");
    $contactInfo = contactinfoView();
    $name = "Roman";          
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
                <span>Login as <a href="../../view/viewProfile.php"><b id="name-linkß"><?php echo $name;?></b></a> </span>
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
            </main>
            <footer>
                <h3>@Copyright for Job-Posting-Web-App</h3>
            </footer>
        </div> 
    </body>
</html>


<script type="text/javascript">
    function _(element) {
        return document.getElementById(element);
    }

    function validateForm() {
      
        let emailValue = _("email").value;
        let numberValue = _("number").value;
        let linkValue = _("link").value;

     
        if (emailValue === "" || numberValue === "") {
            alert("Email and Number fields cannot be empty.");
            return false; 
        }

        return true; 
    }

    function getValueAndDisplay() {
       
        if (!validateForm()) {
            return;
        }

        let contactInfo = {
            'email' : _("email").value , 
            'number': _("number").value,
            'link' : _("link").value
        }
        let data =JSON.stringify(contactInfo);
        let xhttp = new XMLHttpRequest();

        
        xhttp.open('POST', '../../controller/contactInformation/editContactInfoCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhttp.send("contactInfo=" +data);

       
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                let contactInfo = JSON.parse(this.responseText);

                _("display_email").innerHTML = contactInfo.email;
                _("display_number").innerHTML = contactInfo.phone_number;
                _("display_link").innerHTML = contactInfo.link;
                _("outr_link").innerHTML = contactInfo.link;

            }
        };
    }

    _("save").addEventListener("click", getValueAndDisplay);
</script>
