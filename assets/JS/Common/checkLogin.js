import { ajaxRequest } from "./ajaxRequest.js";

export async function checkLogin() {
    return await ajaxRequest("GET", "common/checkLogin.php", {});
}
