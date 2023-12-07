function saveRuleChanges() {
    let R1 = document.getElementById("R1").value;
    let R2 = document.getElementById("R2").value;
    let R3 = document.getElementById("R3").value;
    let R4 = document.getElementById("R4").value;
    let R5 = document.getElementById("R5").value;
    let R6 = document.getElementById("R6").value;
    let errorElement = document.getElementById("error");
    errorElement.innerHTML = "";
    let error = "";
    console.log("lalala")

    if (R1 === "") {
        error += "Fill in R1!<br>";
    }
    if (R2 === "") {
        error += "Fill in R2!<br>";
    }
    if (R3 === "") {
        error += "Fill in R3!<br>";
    }
    if (R4 === "") {
        error += "Fill in R4!<br>";
    }
    if (R5 === "") {
        error += "Fill in R5!<br>";
    }
    if (R6 === "") {
        error += "Fill in R6!<br>";
    }

    if (error) {
        errorElement.innerHTML = error;
    } else {
        updateAllTerms(R1, R2, R3, R4, R5, R6);
    }
}

function updateAllTerms(R1, R2, R3, R4, R5, R6) {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/Rules/rulesAdminCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // JSON
    let data = {
        "R1": R1,
        "R2": R2,
        "R3": R3,
        "R4": R4,
        "R5": R5,
        "R6": R6
    };
    let dataJson = JSON.stringify(data);
    //console.log(dataJson);
    xhttp.send('data=' + dataJson);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText;
            let data = JSON.parse(response);
            console.log(data);
            if (data.success) {
                // Handle success, e.g., show a success message
                window.location.replace("../Rules/rulesAll.php");
            } else {
                let errorElement = document.getElementById("error");
                errorElement.innerHTML = "There was an error!";
            }
        }
    };
}
