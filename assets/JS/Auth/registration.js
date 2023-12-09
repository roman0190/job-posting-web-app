function validateForm() {
    event.preventDefault();

    let firstName = document.getElementById("first_name").value;
    let lastName = document.getElementById("last_name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let gender = document.querySelector('input[name="gender"]:checked');
    let userType = document.querySelector('input[name="user_type"]:checked');
    let dob = document.getElementById("dob").value;
    let error = "";

    if (firstName === "") {
        error = "First name must be filled out";
    }

    if (lastName === "") {
        error = "Last name must be filled out";
    }

    if (email === "") {
        error = "Email must be filled out";
    }

    if (password === "") {
        error = "Password must be filled out";
    }

    if (confirmPassword === "") {
        error = "Confirm Password must be filled out";
    }

    if (password !== confirmPassword) {
        error = "Passwords do not match";
    }

    if (!gender) {
        error = "Gender must be selected";
    }

    if (!userType) {
        error = "User type must be selected";
    }

    if (dob === "") {
        error = "Date of Birth must be filled out";
    }
    document.getElementById("error").innerHTML = error;
    if (!error) {
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../controller/Auth/register.php", true);
        xhttp.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
        );
        let data = {
            firstName: firstName,
            lastName: lastName,
            email: email,
            password: password,
            gender: gender,
            userType: userType,
            dob: dob,
        };
        let jsonData = JSON.stringify(data);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let res = JSON.parse(this.responseText);
                if (res.success) {
                    checkLoggedIN();
                }
            }
        };

        xhttp.send("data=" + jsonData);
    }
}

function checkLoggedIN() {
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../../controller/common/checkLogin.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                console.log(this.responseText);
                let response = JSON.parse(this.responseText);
                if (response.loggedIn) {
                    if (response.userType === "admin") {
                        window.location.replace(
                            "../Dashboard/dashboardAdmin.php"
                        );
                    } else if (userType === "recruiter") {
                        window.location.replace(
                            "../Dashboard/dashboardRecruiter.php"
                        );
                    } else {
                        window.location.replace(
                            "../Dashboard/dashboardApplicant.php"
                        );
                    }
                }
            } else {
                reject(new Error(`Request failed with status ${this.status}`));
            }
        }
    };

    xhttp.send();
}
checkLoggedIN();
