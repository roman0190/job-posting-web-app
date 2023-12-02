function saveChanges() {
    let oldPassword = document.getElementById("oldPassword").value;
    let newPassword = document.getElementById("newPassword").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let errorElement = document.getElementById("error");
    errorElement.innerHTML = "";
    let error = "";

    if (oldPassword === "") {
        error += "Fill in your old password!<br>";
    }
    if (newPassword === "") {
        error += "Fill in your new password!<br>";
    }
    if (confirmPassword === "") {
        error += "Confirm your new password!<br>";
    }

    if (error) {
        errorElement.innerHTML = error;
    } else {
        changePassword(oldPassword, newPassword, confirmPassword);
    }
}

function changePassword(oldPassword, newPassword, confirmPassword) {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/ManageProfile/changePassCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // JSON
    let data = {
        "oldPassword": oldPassword,
        "newPassword": newPassword,
        "confirmPassword": confirmPassword
    }
    let dataJson = JSON.stringify(data);
    console.log(dataJson);
    xhttp.send('data=' + dataJson);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText;
            console.log(response);
            let data = JSON.parse(response);
            console.log(data);
            if (data.success) {
                window.location.replace("../ManageProfile/viewProfile.php");
            } else {
                let errorElement = document.getElementById("error");
                errorElement.innerHTML = data.message || "There was an error!";
            }
        }
    }
}
