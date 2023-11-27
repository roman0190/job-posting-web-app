function validateJob() {
    let title = document.getElementById("title")?.value;
    let category = document.getElementById("category")?.value;
    let subCategory = document.getElementById("subCategory")?.value;
    let position = document.getElementById("position")?.value;
    let skills = document.getElementById("skills")?.value;
    let education = document.getElementById("education")?.value;
    let experience = document.getElementById("experience")?.value;
    let type = document.getElementById("type")?.value;
    let location = document.getElementById("location")?.value;
    let description = document.getElementById("description")?.value;
    let responsibilities = document.getElementById("responsibilities")?.value;
    let tags = document.getElementById("tags")?.value;
    let deadline = document.getElementById("deadline")?.value;
    let error = document.getElementById("error");
    let errorText = "";
    error.innerHTML = "";

    if (!title) errorText += "Please fill in the title<br>";
    if (!category) errorText += "Please fill in the category<br>";
    if (!subCategory) errorText += "Please fill in the subCategory<br>";
    if (!position) errorText += "Please fill in the position<br>";
    if (!skills) errorText += "Please fill in the skills<br>";
    if (!education) errorText += "Please fill in the education<br>";
    if (!experience) errorText += "Please fill in the experience<br>";
    if (!type) errorText += "Please fill in the type<br>";
    if (!location) errorText += "Please fill in the location<br>";
    if (!description) errorText += "Please fill in the description<br>";
    if (!responsibilities)
        errorText += "Please fill in the responsibilities<br>";
    if (!tags) errorText += "Please fill in the tags<br>";
    if (!deadline) errorText += "Please fill in the deadline<br>";
    if (!errorText) {
        updateJob();
    } else {
        console.log(errorText);
        error.innerHTML = errorText;
    }
}

function updateJob() {
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
    let id = document.getElementById("id").value;
    let error = document.getElementById("error");

    let xhttp = new XMLHttpRequest();
    xhttp.open(
        "POST",
        "../../controller/ManageJobs/editJobController.php",
        true
    );
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
        "id=" +
            id +
            "&title=" +
            title +
            "&category=" +
            category +
            "&subCategory=" +
            subCategory +
            "&position=" +
            position +
            "&skills=" +
            skills +
            "&education=" +
            education +
            "&experience=" +
            experience +
            "&type=" +
            type +
            "&location=" +
            location +
            "&description=" +
            description +
            "&responsibilities=" +
            responsibilities +
            "&tags=" +
            tags +
            "&deadline=" +
            deadline +
            "&submit=" +
            "true"
    );
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText === "success!") {
                window.location.href = "./myJobs.php";
            } else error.innerHTML = this.responseText;
        }
    };
}
