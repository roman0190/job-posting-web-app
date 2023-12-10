document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        let isValid = true;

        isValid = validateField(form, "first_name", "First Name cannot be empty.") && isValid;
        isValid = validateField(form, "last_name", "Last Name cannot be empty.") && isValid;
        // isValid = validateField(form, "email", "Email cannot be empty.") && isValid;
        isValid = validateField(form, "phone_number", "Phone Number cannot be empty.") && isValid;
        isValid = validateField(form, "address", "Address cannot be empty.") && isValid;
        isValid = validateField(form, "cv_link", "CV link cannot be empty.") && isValid;
        isValid = validateField(form, "education", "Education cannot be empty.") && isValid;
        isValid = validateField(form, "skills", "Skills cannot be empty.") && isValid;
        isValid = validateField(form, "experience", "Experience cannot be empty.") && isValid;
        isValid = validateField(form, "availability", "Availability cannot be empty.") && isValid;

        const email = form.elements["email"].value;
        if (email.trim() === "") {
            showError("Email cannot be empty.");
            isValid = false;
        } else if (!isValidEmail(email)) {
            showError("Invalid email format.");
            isValid = false;
        }

        if (isValid) {
            submitJobApplication();
        }
    });

    function validateField(form, fieldName, errorMessage) {
        const field = form.elements[fieldName].value.trim();
        if (field === "") {
            showError(errorMessage);
            return false;
        }
        return true;
    }
    function isValidEmail(email) {
        const emailParts = email.split("@");
        return emailParts.length === 2 && emailParts[0].length > 0 && emailParts[1].includes(".");
    }

    function submitJobApplication() {
        let id = document.querySelector("input[name='id']").value;
        let firstName = document.querySelector("input[name='first_name']").value;
        let lastName = document.querySelector("input[name='last_name']").value;
        let email = document.querySelector("input[name='email']").value;
        let phoneNumber = document.querySelector("input[name='phone_number']").value;
        let address = document.querySelector("input[name='address']").value;
        let cvLink = document.querySelector("input[name='cv_link']").value;
        let education = document.querySelector("input[name='education']").value;
        let skills = document.querySelector("input[name='skills']").value;
        let experience = document.querySelector("select[name='experience']").value;
        let availability = document.querySelector("select[name='availability']").value;

        let jobApplicationData = {
            id:id,
            first_name: firstName,
            last_name: lastName,
            email: email,
            phone_number: phoneNumber,
            address: address,
            cv_link: cvLink,
            education: education,
            skills: skills,
            experience: experience,
            availability: availability
        };

        let stringData = JSON.stringify(jobApplicationData);

        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../controller/ApplyToJob/jobApplyCheck.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
               
                let response = JSON.parse(this.responseText);
                console.log(response)
                if (response.success) {
                    window.location.replace("../../view/ApplyToJob/viewAppliedJobs.php");
                }else if (response.error && response.message==="already applied") {
                    alert("already applied");
                    setTimeout(() => {
                        window.location.replace("../../view/ApplyToJob/alreadyApplied.php");
                    }, 3000);
                } else {
                    showError(response.message);
                }
            }
        };

        xhttp.send("data=" + stringData);
    }

    function showError(message) {
        const errorParagraph = document.getElementById("errormess");
        errorParagraph.innerHTML = message;
    }
});
