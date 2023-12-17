function suggest() {
    var id = window.location.toString().split("?")[1]?.split("=")[1];

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../../controller/ManageJobs/suggestion.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        id: id,
    };
    let jsonData = JSON.stringify(data);
    xhttp.send("data=" + jsonData);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
                renderPeople(response.data);
            }
        }
    };
}
suggest();
function renderPeople(data) {
    let container = document.getElementById("suggestion");
    data.forEach((person) => {
        let div = document.createElement("div");
        let hr = document.createElement("hr");
        div.appendChild(hr);
        div.style.margin = "20px";
        div.style.background = "#eeeeee";
        let p1 = document.createElement("p");
        p1.innerHTML = "name: " + person.name;
        div.appendChild(p1);
        let p2 = document.createElement("p");
        p2.innerHTML = "email: " + person.email;
        div.appendChild(p2);
        let p3 = document.createElement("p");
        p3.innerHTML = "skills: " + person.skills;
        div.appendChild(p3);
        let p4 = document.createElement("p");
        p4.innerHTML = "experience: " + person.experience;
        div.appendChild(p4);
        let p5 = document.createElement("p");
        p5.innerHTML = "education: " + person.education;
        div.appendChild(p5);

        container.appendChild(div);
    });
}
