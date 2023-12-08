document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        let isValid = true;

        isValid = validateField("first_name", "First Name cannot be empty.") && isValid;
        isValid = validateField("last_name", "Last Name cannot be empty.") && isValid;
        //isValid = validateField("email", "Email cannot be empty.") && isValid;
        isValid = validateField("phone_number", "Phone Number cannot be empty.") && isValid;
        isValid = validateField("address", "Address cannot be empty.") && isValid;
        isValid = validateField("cv_link", "CV link cannot be empty.") && isValid;
        isValid = validateField("education", "Education cannot be empty.") && isValid;
        isValid = validateField("skills", "skills cannot be empty.") && isValid;
        isValid = validateField("experience", "experience cannot be empty.") && isValid;
        isValid = validateField("avalability", "avalability cannot be empty.") && isValid;

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

    function validateField(fieldName, errorMessage) {
        // const field = form.elements[fieldName].value.trim();
        const email = form.elements["email"].value;
        if (email === "") {
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
        // Extract data from the job application form
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

        // Create an object with the extracted data
        let jobApplicationData = {
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

        // Converting the job application data to a JSON string
        let stringData = JSON.stringify(jobApplicationData);

        // Perform an AJAX request to submit the job application data
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../controller/ApplyToJob/jobApplyCheck.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let response = JSON.parse(this.responseText);
                if (response.success) {
                    window.location.replace("../../view/ApplyToJob/viewAppliedJobs.php");
                } else {
                    showError(response.message);
                }
            }
        };

        // Send the AJAX request with the job application data
        xhttp.send("data=" + stringData);
    }

    function showError(message) {
        const errorParagraph = document.getElementById("errormess");
        errorParagraph.innerHTML = message;
    }
});
