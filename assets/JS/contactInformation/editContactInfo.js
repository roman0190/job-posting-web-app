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