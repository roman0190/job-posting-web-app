let form = document.getElementById("form");
form.addEventListener("submit", function (e) {
    e.preventDefault();

    let newabout = document.getElementById("newAbout").value;

    if (!newabout)
        return (document.getElementById("error").innerHTML =
            "cannot submit empty text");

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../../controller/AboutPage/aboutUpdate.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
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
                document.getElementById("about").innerHTML = response.data;
            } else error.innerHTML = this.responseText;
        }
    };
});
