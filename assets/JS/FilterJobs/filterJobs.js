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
    let form = document.getElementById("filter");
    let categories = ` <option>-</option>
    <option value="software engineering" <?= $category == "software engineering" ? 'selected="selected"' : "" ?>>Software Engineering</option>
    <option value="Data Science" <?= $category == "Data Science" ? 'selected="selected"' : "" ?>>Data Science</option>
    <option value="Web Development" <?= $category == "Web Development" ? 'selected="selected"' : "" ?>>Web Development</option>
    <option value="Mobile App Development" <?= $category == "Mobile App Development" ? 'selected="selected"' : "" ?>>Mobile App Development</option>
    <option value="UX/UI Design" <?= $category == "UX/UI Design" ? 'selected="selected"' : "" ?>>UX/UI Design</option>
    <option value="Finance" <?= $category == "Finance" ? 'selected="selected"' : "" ?>>Finance</option>
    <option value="Marketing" <?= $category == "Marketing" ? 'selected="selected"' : "" ?>>Marketing</option>
    <option value="Healthcare" <?= $category == "Healthcare" ? 'selected="selected"' : "" ?>>Healthcare</option>
    <option value="Education" <?= $category == "Education" ? 'selected="selected"' : "" ?>>Education</option>
    <option value="Construction" <?= $category == "Construction" ? 'selected="selected"' : "" ?>>Construction</option>`;

    let subCategories = ` <option>-</option>
    <option value="Front End Development" <?= $subCategory == "Front End Development" ? 'selected="selected"' : "" ?>>Front End Development</option>
    <option value="Back End Development" <?= $subCategory == "Back End Development" ? 'selected="selected"' : "" ?>>Back End Development</option>
    <option value="Full Stack Development" <?= $subCategory == "Full Stack Development" ? 'selected="selected"' : "" ?>>Full Stack Development</option>
    <option value="Software Testing" <?= $subCategory == "Software Testing" ? 'selected="selected"' : "" ?>>Software Testing</option>
    <option value="DevOps" <?= $subCategory == "DevOps" ? 'selected="selected"' : "" ?>>DevOps</option>
    <option value="UI/UX Design" <?= $subCategory == "UI/UX Design" ? 'selected="selected"' : "" ?>>UI/UX Design</option>
    <option value="Mobile Development" <?= $subCategory == "Mobile Development" ? 'selected="selected"' : "" ?>>Mobile Development</option>
    <option value="Data Mining" <?= $subCategory == "Data Mining" ? 'selected="selected"' : "" ?>>Data Mining</option>
    <option value="Data Visualization" <?= $subCategory == "Data Visualization" ? 'selected="selected"' : "" ?>>Data Visualization</option>
    <option value="Big Data Analysis" <?= $subCategory == "Big Data Analysis" ? 'selected="selected"' : "" ?>>Big Data Analysis</option>
    <option value="Data Engineering" <?= $subCategory == "Data Engineering" ? 'selected="selected"' : "" ?>>Data Engineering</option>
    <option value="Machine Learning Engineering" <?= $subCategory == "Machine Learning Engineering" ? 'selected="selected"' : "" ?>>Machine Learning Engineering</option>
    <option value="Financial Planning" <?= $subCategory == "Financial Planning" ? 'selected="selected"' : "" ?>>Financial Planning</option>
    <option value="Investment Banking" <?= $subCategory == "Investment Banking" ? 'selected="selected"' : "" ?>>Investment Banking</option>
    <option value="Financial Risk Management" <?= $subCategory == "Financial Risk Management" ? 'selected="selected"' : "" ?>>Financial Risk Management</option>
    <option value="Content Marketing" <?= $subCategory == "Content Marketing" ? 'selected="selected"' : "" ?>>Content Marketing</option>
    <option value="Social Media Marketing" <?= $subCategory == "Social Media Marketing" ? 'selected="selected"' : "" ?>>Social Media Marketing</option>
    <option value="Brand Management" <?= $subCategory == "Brand Management" ? 'selected="selected"' : "" ?>>Brand Management</option>
    <option value="Pharmacy" <?= $subCategory == "Pharmacy" ? 'selected="selected"' : "" ?>>Pharmacy</option>
    <option value="Medical Coding" <?= $subCategory == "Medical Coding" ? 'selected="selected"' : "" ?>>Medical Coding</option>
    <option value="Healthcare Administration" <?= $subCategory == "Healthcare Administration" ? 'selected="selected"' : "" ?>>Healthcare Administration</option>
    <option value="Teaching" <?= $subCategory == "Teaching" ? 'selected="selected"' : "" ?>>Teaching</option>
    <option value="Education Administration" <?= $subCategory == "Education Administration" ? 'selected="selected"' : "" ?>>Education Administration</option>
    <option value="Civil Engineering" <?= $subCategory == "Civil Engineering" ? 'selected="selected"' : "" ?>>Civil Engineering</option>
    <option value="Architecture" <?= $subCategory == "Architecture" ? 'selected="selected"' : "" ?>>Architecture</option>
    <option value="Construction Management" <?= $subCategory == "Construction Management" ? 'selected="selected"' : "" ?>>Construction Management</option>`;

    category.append(categories);
    subCategory.append(subCategories);
    form.appendChild(searchDiv);
    form.appendChild(categoryDiv);
    form.appendChild(subCategoryDiv);
    form.appendChild(skillsDiv);
    form.appendChild(experienceDiv);
    form.appendChild(typeDiv);
    form.appendChild(locationDiv);
    let button1 = document.createElement("input");
    button1.textContent = "Search";
    button1.value = "Search";

    button1.type = "button";
    form.appendChild(button1);
    button1.addEventListener("click", searchData);
    let button = document.createElement("input");
    button.textContent = "clear";
    button.type = "reset";
    form.appendChild(button);
    button.addEventListener("click", function () {
        setTimeout(() => {
            searchData();
        }, 500);
    });
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
    if (jobs.length === 0)
        container.innerHTML = "nothing matches your search criteria";
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
