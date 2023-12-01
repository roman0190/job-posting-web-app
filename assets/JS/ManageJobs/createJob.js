function validateJob() {
    let title = document.getElementById("title").value;
    let category = document.getElementById("category").value;
    let subCategory = document.getElementById("subCategory").value;
    let position = document.getElementById("position").value;
    let skills = document.getElementById("skills").value;
    let education = document.getElementById("education").value;
    let experience = document.getElementById("experience").value;
    let type = document.getElementById("type").value;
    let location = document.getElementById("location").value;
    let description = document.getElementById("description").value;
    let responsibilities = document.getElementById("responsibilities").value;
    let tags = document.getElementById("tags").value;
    let deadline = document.getElementById("deadline").value;
    let error = document.getElementById("error");

    error.innerHTML = "";

    if (
        !title ||
        !category ||
        !subCategory ||
        !position ||
        !skills ||
        !education ||
        !experience ||
        !type ||
        !location ||
        !description ||
        !responsibilities ||
        !tags ||
        !deadline
    ) {
        error.innerHTML = "Please fill all the required fields";
    } else {
        addJob();
    }
}

function addJob() {
    let title = document.getElementById("title").value;
    let category = document.getElementById("category").value;
    let subCategory = document.getElementById("subCategory").value;
    let position = document.getElementById("position").value;
    let skills = document.getElementById("skills").value;
    let education = document.getElementById("education").value;
    let experience = document.getElementById("experience").value;
    let type = document.getElementById("type").value;
    let location = document.getElementById("location").value;
    let description = document.getElementById("description").value;
    let responsibilities = document.getElementById("responsibilities").value;
    let tags = document.getElementById("tags").value;
    let deadline = document.getElementById("deadline").value;
    let error = document.getElementById("error");

    let xhttp = new XMLHttpRequest();
    xhttp.open(
        "POST",
        "../../controller/ManageJobs/createNewJobCheck.php",
        true
    );
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        title: title,
        category: category,
        subCategory: subCategory,
        position: position,
        skills: skills,
        education: education,
        experience: experience,
        type: type,
        location: location,
        description: description,
        responsibilities: responsibilities,
        tags: tags,
        deadline: deadline,
    };
    let jsondata = JSON.stringify(data);
    xhttp.send("data=" + jsondata);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let responseText = this.responseText;
            let data = JSON.parse(responseText);
            if (!data.error) {
                window.location.href = "./myJobs.php";
            } else error.innerHTML = data.error;
        }
    };
}
