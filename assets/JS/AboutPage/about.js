import { ajaxRequest } from "../Common/ajaxRequest.js";
import { checkLogin } from "../Common/checkLogin.js";
async function fetchText() {
    let response = await ajaxRequest("GET", "AboutPage/aboutFetch.php");

    if (response && !response?.error) {
        document.getElementById("about").innerHTML = response.data;
    } else if (response && response.error) error.innerHTML = response?.error;
}
fetchText();

async function adminFunctions() {
    let user = await checkLogin();
    console.log(user);
    if (user?.loggedIn) {
        let adminDiv = document.getElementById("adminContainer");
        let form = document.createElement("form");
        console.log(adminDiv);
        let header = document.createElement("h3");
        header.id = "form";
        header.textContent = "Edit to update about page (admin Option)";
        let textArea = document.createElement("textarea");
        textArea.id = "newAbout";
        let errorParagraph = document.createElement("p");
        errorParagraph.id = "newAbout";

        let submitButton = document.createElement("button");
        submitButton.textContent = "Submit";
        form.appendChild(header);
        form.appendChild(textArea);
        form.appendChild(errorParagraph);
        form.appendChild(submitButton);
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            let newabout = document.getElementById("newAbout").value;

            if (!newabout)
                return (document.getElementById("error").innerHTML =
                    "cannot submit empty text");

            let xhttp = new XMLHttpRequest();
            xhttp.open(
                "POST",
                "../../controller/AboutPage/aboutUpdate.php",
                true
            );
            xhttp.setRequestHeader(
                "Content-type",
                "application/x-www-form-urlencoded"
            );
            let data = {
                about: newabout,
            };
            let jsonData = JSON.stringify(data);
            console.log(jsonData);
            xhttp.send("data=" + jsonData);
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    let response = JSON.parse(this.responseText);
                    if (!response.error) {
                        document.getElementById("about").innerHTML =
                            response.data;
                    } else error.innerHTML = this.responseText;
                }
            };
        });
        adminDiv.appendChild(form);
    }
}
adminFunctions();
