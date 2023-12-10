import { ajaxRequest } from "../Common/ajaxRequest.js";
import { saveJob } from "../SaveJobForLater/saveJob.js";

async function fetchJob() {
    let id = window.location.toString().split("?")[1]?.split("=")[1];
    let data = {
        id: id,
    };

    const job = await ajaxRequest("POST", "BrowseJobs/singleJob.php", data);
    await showJob(job);
}
fetchJob();
function showJob(job) {
    let container = document.getElementById("container");
    let table = document.createElement("table");
    let head = document.createElement("th");
    let h2 = document.createElement("h2");
    h2.textContent = "Job Information";
    head.appendChild(h2);
    table.appendChild(head);
    head.colSpan = 2;
    Object.entries(job).forEach((value) => {
        if (
            value[0] !== "id" &&
            value[0] !== "job_poster" &&
            value[0] !== "post_time"
        )
            table.appendChild(TR(value));
    });
    container.appendChild(table);

    let button = document.createElement("button");
    button.textContent = "Apply";
    button.addEventListener("click", () => {
        window.location.href = "../ApplyToJob/jobApply.php?id=" + job.id;
    });
    table.appendChild(button);
    let button2 = document.createElement("button");
    button2.textContent = "Report";
    button2.addEventListener("click", async () => {
        let res = await ajaxRequest("POST", "Report/reportJob.php", {
            id: job.id,
        });
        console.log(res);
        alert(res.message);
    });
    
    table.appendChild(button2);
    
    let button3 = document.createElement("button");
    button3.textContent = "Save";
    button3.addEventListener("click", async () => {
        await saveJob(job.id)
    });
    
    table.appendChild(button3);
}
function TR(value) {
    let td = TD(value[0], true);
    let td1 = TD(value[1]);
    let tr = document.createElement("tr");
    tr.appendChild(td);
    tr.appendChild(td1);
    return tr;
}
function TD(text, key) {
    let td = document.createElement("td");
    if (key) text = text + ":";

    td.textContent = text;
    if (key) td.appendChild(document.createElement("hr"));
    return td;
}
