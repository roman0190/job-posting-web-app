document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); 
        let isValid = true;

        let gender 
        if(document.getElementById("Male").checked) gender = "Male";
        if(document.getElementById("Female").checked) gender = "Female";
        if(document.getElementById("Other").checked) gender = "Other";
       
        let user_type
        if(document.getElementById("Applicant").checked) user_type = "Applcant";
        if(document.getElementById("Recruiter").checked) user_type = "Recruiter";
      
        // Name validation
        const name = form.elements["name"].value;
        if (name.trim() === "") {
            showError("Name cannot be empty.");
            isValid = false;
        }

        // Email validation
        const email = form.elements["email"].value;
        if (email.trim() === "") {
            showError("Email cannot be empty.");
            isValid = false;
        } else if (!isValidEmail(email)) {
            showError("Invalid email format.");
            isValid = false;
        }

        const password = form.elements["password"].value;
        const confirmPassword = form.elements["confirm_pass"].value;
        if (password.trim() === "" || confirmPassword.trim() === "") {
            showError("Password and Confirm Password cannot be empty.");
            isValid = false;
        } else if (password.length < 5) {
            showError("Password must contain at least 5 characters.");
            isValid = false;
        } else if (password !== confirmPassword) {
            showError("Password and Confirm Password must match.");
            isValid = false;
        }


        if (isValid) {
            
            registration()
        }
    });

    function showError(message) {
        const errorParagraph = document.getElementById("errormess");
        errorParagraph.innerHTML= message;
    }

   
    function isValidEmail(email) {
        const emailParts = email.split("@");
        return emailParts.length === 2 && emailParts[0].length > 0 && emailParts[1].includes(".");
    }

    
});


function registration() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let username = document.getElementById("username").value;
    let gender 
    if(document.getElementById("Male").checked) gender = "Male";
    if(document.getElementById("Female").checked) gender = "Female";
    if(document.getElementById("Other").checked) gender = "Other";
    let dob = document.getElementById("dob").value;
    let user_type
    if(document.getElementById("Applicant").checked) user_type = "Applcant";
    if(document.getElementById("Recruiter").checked) user_type = "Recruiter";
   
    let xhttp = new XMLHttpRequest();
    xhttp.open(
        "POST",
        "../../../controller/authFeature/signUpcheck.php",
        true
    );
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


    let data = {
        name: name,
        email: email,
        password: password,
        username: username,
        dob: dob,
        user_type: user_type,
        gender: gender
    }
    let stringData = JSON.stringify(data);



    xhttp.send(
        "data=" +
        stringData
    );
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
           let res = this.responseText
           console.log(this.responseText)
           console.log(res)
           let data =JSON.parse(res)
           console.log(data)
            if(data.message==="successfully inserted"){
                setTimeout(() => {
                    
                    window.location.replace("../../../view/authFeature/signIn.php");
                }, 2000);
            }

            const errorParagraph = document.getElementById("errormess");
            errorParagraph.innerHTML= data.message;
        }
    };
}

