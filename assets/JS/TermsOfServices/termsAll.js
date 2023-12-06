function saveTermChanges() {
    let T1 = document.getElementById("T1").value;
    let T2 = document.getElementById("T2").value;
    let T3 = document.getElementById("T3").value;
    let T4 = document.getElementById("T4").value;
    let T5 = document.getElementById("T5").value;
    let T6 = document.getElementById("T6").value;
    let errorElement = document.getElementById("error");
    errorElement.innerHTML = "";
    let error = "";
    console.log("lalala")

    if (T1 === "") {
        error += "Fill in T1!<br>";
    }
    if (T2 === "") {
        error += "Fill in T2!<br>";
    }
    if (T3 === "") {
        error += "Fill in T3!<br>";
    }
    if (T4 === "") {
        error += "Fill in T4!<br>";
    }
    if (T5 === "") {
        error += "Fill in T5!<br>";
    }
    if (T6 === "") {
        error += "Fill in T6!<br>";
    }

    if (error) {
        errorElement.innerHTML = error;
    } else {
        updateAllTerms(T1, T2, T3, T4, T5, T6);
    }
}

function updateAllTerms(T1, T2, T3, T4, T5, T6) {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/TermsOfServices/termsAdminCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // JSON
    let data = {
        "T1": T1,
        "T2": T2,
        "T3": T3,
        "T4": T4,
        "T5": T5,
        "T6": T6
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
                window.location.replace("../TermsOfServices/termsAll.php");
            } else {
                let errorElement = document.getElementById("error");
                errorElement.innerHTML = "There was an error!";
            }
        }
    };
}
