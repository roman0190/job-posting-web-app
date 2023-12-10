import { checkLogin } from "../Common/checkLogin.js";

async function generateHeader() {
    let userData = await checkLogin();

    let userinfo = document.createElement("div");
    userinfo.className = "user-info";
    let img = document.createElement("img");
    img.src = "../../assets/images/logo.png";
    img.alt = "logo";
    img.addEventListener("click", () => {
        if (userData?.loggedIn) {
            if (userData?.userType === "admin") {
                window.location.replace("../Dashboard/dashboardAdmin.php");
            } else if (userData?.userType === "recruiter") {
                window.location.replace("../Dashboard/dashboardRecruiter.php");
            } else {
                window.location.replace("../Dashboard/dashboardApplicant.php");
            }
        }
    });
    let span = document.createElement("span");
    span.innerText = "Welcome";
    let a = document.createElement("a");
    a.href = "../ManageProfile/viewProfile.php";
    a.textContent = userData?.username || "";
    span.appendChild(a);
    userinfo.appendChild(img);
    userinfo.appendChild(span);

    let headContent = document.createElement("div");
    headContent.className = "header";
    let h1 = document.createElement("h1");
    h1.textContent = "Dashboard";
    let h6 = document.createElement("h6");
    h1.textContent = userData?.userType || "";
    headContent.appendChild(h1);
    headContent.appendChild(h6);

    let logoutbutton = document.createElement("div");
    logoutbutton.className = "logout";
    let a1 = document.createElement("a");
    a1.href = "../Auth/logout.php";
    a1.textContent = "Log out";
    logoutbutton.appendChild(a1);
    let header = document.getElementById("header");
    header.appendChild(userinfo);
    header.appendChild(headContent);
    header.appendChild(logoutbutton);
}

generateHeader();
