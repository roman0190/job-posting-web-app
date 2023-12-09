import { ajaxRequest } from "../Common/ajaxRequest.js";

async function fetchJobs() {
    const jobs = await ajaxRequest("GET", "BrowseJobs/sendAllJobs.php", {});
    await showJobs(jobs);
}
fetchJobs();
function showJobs(jobs) {
    let container = document.getElementById("container");
    jobs.forEach((job) => {
        container.appendChild(showJob(job));
    });
}
function showJob(job) {
    let card = document.createElement("div");
    card.className = "card";

    let h4 = document.createElement("h4");
    h4.innerText = job.title;
    card.appendChild(h4);
    let p1 = document.createElement("p");
    p1.textContent = `Category : ${job.category}  | Sub Category : ${job.sub_category}`;
    card.appendChild(p1);
    let p2 = document.createElement("p");
    p2.textContent = `position : ${job.job_position}  | Application Deadline :  ${job.application_deadline}`;
    card.appendChild(p2);

    let a = document.createElement("a");
    a.href = `jobDetail.html?id=${job.id}`;
    a.textContent = "See Details";
    card.appendChild(a);

    return card;
}
