import { ajaxRequest } from "../Common/ajaxRequest.js";
import { checkLogin } from "../Common/checkLogin.js";
let editing = false;
let editId = 0;
let loading = false;
async function fetchFAQ() {
    let user = await checkLogin();
    if (user?.userType === "admin") {
        let res = await ajaxRequest("GET", "FAQ/faqFetch.php");
        let faqs = res.data;
        showFAQ(faqs, true);
        adminHtml();
    } else {
        let res = await ajaxRequest("GET", "FAQ/faqFetch.php");
        let faqs = res.data;
        showFAQ(faqs);
    }
}
function showFAQ(faqs, admin) {
    let container = document.getElementById("container");
    container.innerHTML = "";
    faqs.forEach((faq) => {
        let question = document.createElement("p");
        question.style.fontWeight = 800;
        question.textContent = `${faq?.id}. ${faq?.question}`;
        let answer = document.createElement("p");
        answer.style.fontWeight = 400;
        answer.textContent = faq?.answer;
        let div = document.createElement("div");
        div.style.backgroundColor = "#f7f7f7";
        div.style.marginBottom = "20px";
        div.appendChild(question);
        div.appendChild(answer);
        if (admin) {
            let editButton = document.createElement("button");
            editButton.textContent = "Edit";
            editButton.onclick = function () {
                editButtonClick();
            };
            editButton.style.marginRight = "20px";
            div.appendChild(editButton);

            let deleteButton = document.createElement("button");
            deleteButton.textContent = "Delete";
            deleteButton.onclick = function () {
                deleteFAQ(faq.id);
            };
            div.appendChild(deleteButton);
        }

        function editButtonClick() {
            let questionLabel = document.createElement("p");
            let question = document.createElement("input");
            let answerLabel = document.createElement("p");
            let answer = document.createElement("input");
            div.innerHTML = "";
            question.value = faq.question;
            answer.value = faq.answer;
            questionLabel.textContent = `${faq.id}. `;
            questionLabel.appendChild(question);
            answerLabel.appendChild(answer);
            div.appendChild(questionLabel);
            div.appendChild(answerLabel);

            let saveButton = document.createElement("button");
            saveButton.textContent = "Save";
            saveButton.onclick = () => {
                let data = {
                    question: question.value,
                    answer: answer.value,
                    id: faq.id,
                };
                editFAQ(data);
            };
            div.appendChild(saveButton);
        }
        container.appendChild(div);
    });
}

async function adminHtml() {
    let adminContainer = document.getElementById("admin-container");

    let questionInput = document.createElement("input");
    let answerInput = document.createElement("input");
    let questionLabel = document.createElement("p");
    let answerLabel = document.createElement("p");
    let error = document.createElement("p");
    error.id = "error";
    questionLabel.textContent = "Question : ";
    answerLabel.textContent = "answer : ";
    questionLabel.appendChild(questionInput);
    adminContainer.appendChild(questionLabel);
    questionInput.id = "question";
    answerInput.id = "answer";
    answerLabel.appendChild(answerInput);
    adminContainer.appendChild(answerLabel);
    adminContainer.appendChild(error);

    let button = document.createElement("button");
    button.style.marginLeft = "20px";
    button.type = "submit";

    questionLabel.appendChild(button);
    button.id = "submitButton";

    button.disabled = loading;

    if (editing) {
        button.textContent = `Edit No ${editId}`;
    } else {
        button.textContent = "Add New";
    }

    adminContainer.addEventListener("submit", async function (e) {
        e.preventDefault();
        error.textContent = "";
        console.log(editing);
        if (!questionInput.value || !answerInput.value) {
            return (error.textContent = "Cannot submit empty");
        }

        loading = true;
        if (editing) {
            let data = {
                question: questionInput.value,
                answer: answerInput.value,
                id: editId,
            };
            let res = await ajaxRequest("POST", "FAQ/update.php", data);

            loading = false;
            showFAQ(res.data);
            res.success && showUpdate("successfully updated");
        } else {
            let data = {
                question: questionInput.value,
                answer: answerInput.value,
            };
            let res = await ajaxRequest("POST", "FAQ/add.php", data);

            loading = false;
            showFAQ(res.data);
            res.success && showUpdate("successfully Added");
        }
    });
}
function showUpdate(message) {
    let error = document.getElementById("error");
    error.textContent = message;
    let questionInput = document.getElementById("question");
    let answerInput = document.getElementById("answer");
    questionInput.value = "";
    answerInput.value = "";
    let clearTimeout = setTimeout(() => {
        error.textContent = "";
    }, 3000);
    return clearTimeout;
}
async function deleteFAQ(id) {
    let data = { id: id };
    let res = await ajaxRequest("POST", "FAQ/delete.php", data);
    loading = false;
    showFAQ(res.data, true);
    res.success && showUpdate("successfully Deleted");
}
async function editFAQ(data) {
    let res = await ajaxRequest("POST", "FAQ/edit.php", data);
    loading = false;
    showFAQ(res.data, true);
}

fetchFAQ();
