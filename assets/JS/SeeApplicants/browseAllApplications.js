import { ajaxRequest } from "../Common/ajaxRequest.js";

async function fetchJob() {
    let id = window.location.toString().split("?")[1]?.split("=")[1];
    let data = {
        id: id,
    };
    console.log("id:" + id);
    const res = await ajaxRequest(
        "POST",
        "SeeApplicants/browseAllApplications.php",
        data
    );
    if (res.success) {
        renderApplicants(res.data);
    }
}
fetchJob();

function renderApplicants(applications) {
    let container = document.getElementById("container");
    console.log(applications);
    applications.forEach((application, index) => {
        container.appendChild(renderCard(application, index + 1));
    });
}
function renderCard(application, index) {
    let table = document.createElement("table");
    let SL = tr("Sl :", +index);
    table.appendChild(SL);
    let fname = tr("First Name", application.first_name);
    table.appendChild(fname);
    let lname = tr("Last Name", application.last_name);
    table.appendChild(lname);
    let phone = tr("Phone Number", application.phone_number);
    table.appendChild(phone);
    let email = tr("email", application.email);
    table.appendChild(email);
    let education = tr("education", application.education);
    table.appendChild(education);
    let exp = tr("Experience", application.experience);
    table.appendChild(exp);
    let address = tr("Address", application.address);
    table.appendChild(address);
    let availability = tr("Availability", application.availability);
    table.appendChild(availability);
    let skills = tr("Skills", application.skills);
    table.appendChild(skills);
    let cv = tr("CV Link", application.cv_link);
    table.appendChild(cv);
    let button = document.createElement("button");
    if (application.shortlisted_applications) {
        button.textContent = "Unshortlist";
        button.onclick = () => {
            console.log("unshortlist");
        };
    } else {
        button.textContent = "Shortlist";
        button.onclick = () => {
            console.log("clicked");
        };
    }
    table.appendChild(button);
    let button2 = document.createElement("button");

    button2.textContent = "Delete";
    button2.onclick = () => {
        console.log("unshortlist");
    };

    table.appendChild(button2);
    let button3 = document.createElement("button");

    button3.textContent = "Report";
    button3.onclick = async () => {
        let res = await ajaxRequest("POST", "Report/reportApplicaton.php", {
            id: application.applicant_id,
        });
        console.log(res);
        alert(res.message);
    };

    table.appendChild(button3);
    return table;
}
function tr(key, value) {
    let tr = document.createElement("tr");
    tr.appendChild(tdKey(key));
    tr.appendChild(tdValue(value));
    return tr;
}
function tdKey(text) {
    let td = document.createElement("td");
    td.textContent = text;
    return td;
}
function tdValue(value) {
    let td = document.createElement("td");
    td.textContent = ": " + value;
    return td;
}
