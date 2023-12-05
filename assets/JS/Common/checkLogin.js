import { ajaxRequest } from "./ajaxRequest";
data = {
    name: "albi",
};
function checkLogin() {
    let response = ajaxRequest("GET", "common/checkLogin.php", data);
}
