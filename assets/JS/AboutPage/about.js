function fetchText() {
    console.log("Fetching text");
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../../controller/AboutPage/aboutFetch.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (!response.error) {
                document.getElementById("about").innerHTML = response.data;
            } else error.innerHTML = this.responseText;
        }
    };
}
fetchText();
