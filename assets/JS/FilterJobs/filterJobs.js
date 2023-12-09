import { ajaxRequest } from "../Common/ajaxRequest.js";

function initiateSearch() {
    let searchDiv = document.createElement("div");
    let searchLabel = document.createElement("label");
    searchLabel.textContent = "search";
    let search = document.createElement("input");
    search.id = "search";
    searchDiv.appendChild(searchLabel);
    searchDiv.appendChild(search);
    let categoryDiv = document.createElement("div");
    let categoryLabel = document.createElement("label");
    categoryLabel.textContent = "category";
    let category = document.createElement("select");
    category.id = "category";
    categoryDiv.appendChild(categoryLabel);
    categoryDiv.appendChild(category);
    let subCategoryDiv = document.createElement("div");
    let subCategoryLabel = document.createElement("label");
    subCategoryLabel.textContent = "subCategory";
    let subCategory = document.createElement("select");
    subCategory.id = "subCategory";
    subCategoryDiv.appendChild(subCategoryLabel);
    subCategoryDiv.appendChild(subCategory);
    let skillsDiv = document.createElement("div");
    let skillsLabel = document.createElement("label");
    skillsLabel.textContent = "skills";
    let skills = document.createElement("input");
    skills.id = "skills";
    skillsDiv.appendChild(skillsLabel);
    skillsDiv.appendChild(skills);
    let experienceDiv = document.createElement("div");
    let experienceLabel = document.createElement("label");
    experienceLabel.textContent = "experience";
    let experience = document.createElement("input");
    experience.id = "experience";
    experienceDiv.appendChild(experienceLabel);
    experienceDiv.appendChild(experience);
    let typeDiv = document.createElement("div");
    let typeLabel = document.createElement("label");
    typeLabel.textContent = "type";
    let type = document.createElement("input");
    type.id = "type";
    typeDiv.appendChild(typeLabel);
    typeDiv.appendChild(type);
    let locationDiv = document.createElement("div");
    let locationLabel = document.createElement("label");
    locationLabel.textContent = "location";
    let location = document.createElement("input");
    location.id = "location";
    locationDiv.appendChild(locationLabel);
    locationDiv.appendChild(location);

    search.addEventListener("blur", searchData);
    category.addEventListener("blur", searchData);
    subCategory.addEventListener("blur", searchData);
    skills.addEventListener("blur", searchData);
    experience;
    type.addEventListener("blur", searchData);
    location.addEventListener("blur", searchData);
    document.getElementById("filter").appendChild(searchDiv);
    document.getElementById("filter").appendChild(categoryDiv);
    document.getElementById("filter").appendChild(subCategoryDiv);
    document.getElementById("filter").appendChild(skillsDiv);
    document.getElementById("filter").appendChild(experienceDiv);
    document.getElementById("filter").appendChild(typeDiv);
    document.getElementById("filter").appendChild(locationDiv);
}
initiateSearch();

async function searchData() {
    let search = document.getElementById("search").value;
    let category = document.getElementById("category").value;
    let subCategory = document.getElementById("subCategory").value;
    let skills = document.getElementById("skills").value;
    let experience = document.getElementById("experience").value;
    let type = document.getElementById("type").value;
    let location = document.getElementById("location").value;

    let data = {
        search: search,
        category: category,
        subCategory: subCategory,
        skills: skills,
        experience: experience,
        type: type,
        location: location,
    };
    let res = await ajaxRequest("POST", "FilterJobs/filter.php", data);
    showJobs(res);
}
export function showJobs(jobs) {
    let container = document.getElementById("container");
    container.innerHTML = "";
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
