function fetchJob() {
    let xhttp = new XMLHttpRequest();

    xhttp.open(
        "POST",
        "../../controller/ManageJobs/specificJobController.php",
        true
    );
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    try {
        var id = window.location.toString().split("?")[1]?.split("=")[1];
        console.log(id);
        xhttp.send("id=" + id);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let responseText = this.responseText;
                console.log(responseText);
                let data = JSON.parse(responseText);

                if (!data.error) {
                    printJob(data);
                } else if (data.error === "invalidJobId") {
                    console.log("Invalid");
                }
            }
        };
    } catch (error) {
        console.log(error);
    }
}

function printJob(job) {
    const contentDiv = document.createElement("div");
    contentDiv.className = "card";
    contentDiv.innerHTML = `
    <h4> ${job.title}</h4>
        Category: ${job.category} | sub category: ${job.sub_category}<br>
        Position: ${job.job_position} | Application Deadline ${job.application_deadline}
        <br>
        Job Type : ${job.job_type} | Job Location ${job.job_location} <br>
        Required Skills : ${job.required_skills} |
        Required Education: ${job.required_education} |
        Required Experience : ${job.required_experience} <br>
        <b>Job Description:</b>
        <p> ${job.job_description} </p>
        <b>Job Responsibilities </b>
        <p> ${job.job_description} </p>


        <br>
        <a href='editJob.php?id=${job.id}'>Edit Job</a>
        <br>
        <a href='../SeeApplicants/allApplications.html?id=${job.id}'>See Applicants</a>
       
    
        
       `;

    document.getElementById("container").appendChild(contentDiv);
}

fetchJob();
