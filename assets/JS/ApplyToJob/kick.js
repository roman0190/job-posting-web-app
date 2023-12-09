var id = window.location.toString().split("?")[1]?.split("=")[1];

async function handleKick() {
    let xhttp = new XMLHttpRequest();
    xhttp.open(
        "GET",
        "../../controller/ApplyToJob/isAlreadyAppliedToThis.php?id=" + id,
        true
    );
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                let res = JSON.parse(this.responseText);

                if (res.alreadyApplied) {
                    window.location.replace(
                        "../../view/ApplyToJob/alreadyApplied.php"
                    );
                }
            } else {
                reject(new Error(`Request failed with status ${this.status}`));
            }
        }
    };

    xhttp.send();
}
handleKick();
