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

setInterval(push_get_data, 50);
