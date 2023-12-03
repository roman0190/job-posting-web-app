<?php 
    require_once("../../model/policyModel.php");
    $policy = policyView();
    $name = "Roman";          
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
            <span>Login as <a href="../../view/viewProfile.php"><b id="name-linkß"><?php echo $name;?></b></a> </span>
        </header>
        <main>
            <label for="policy-input">Policy: </label> <br>
            <textarea id="policy-input"><?php echo $policy["policy"];?></textarea><br><br>
            <input type="button" id="save-button" value="Save" onclick="push_get_data()"> <br><br>
            <label><b>Preview:</b></label> <br><br>
            <label id ="preview"></label>
        </main>
        <footer>
            <h3>@Copyright for Job-Posting-Web-App</h3>
        </footer>
    </div>


    <script type="text/javascript" >

        function _(element){
            return document.getElementById(element).value;
        }
    
                function push_get_data(){
    
                    let policy_input = _("policy-input");
    
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('POST', '../../controller/privacyPolicy/editPrivacyPolicyCheck.php', true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("policy-input="+policy_input); 
    
                    xhttp.onreadystatechange = function(){
    
                        if(this.readyState == 4 && this.status == 200){
    
                            document.getElementById('preview').innerHTML = this.responseText;
                            
                        }
                    }
                }
    
    
    </script>
</body>
</html>

