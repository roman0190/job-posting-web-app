function fetchJobs() {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../../controller/ManageJobs/fetchAllMyJobs.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let responseText = this.responseText;

            let data = JSON.parse(responseText);

            if (!data.error) {
                printJobs(data);
            } else error.innerHTML = data.error;
        }
    };
}

function printJobs(jobs) {
    jobs.forEach((job, index) => {
        const contentDiv = document.createElement("div");
        contentDiv.className = "card";
        contentDiv.innerHTML = `
        <h4>${job.title}</h4>
        <p>
        category: ${job.category} |   sub category:  ${job.sub_category}<br>
        position: ${job.job_position}   |   Application Deadline ${job.application_deadline} </p>
        <a href='myJob.php?id=${job.id}'>See details</a>
       `;

        document.getElementById("container").appendChild(contentDiv);
    });
    document.getElementById("numOfJobs").innerHTML = jobs.length;
}

fetchJobs();
