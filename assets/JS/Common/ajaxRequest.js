// function ajaxRequest(method, route,data) {

//     let xhttp = new XMLHttpRequest();
//     xhttp.open(method, `http://localhost/job/controller/${route}`, true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

//     xhttp.send();
//     xhttp.onreadystatechange = function () {
//         if (this.readyState == 4 && this.status == 200) {
//             console.log(this.responseText);
//             let response = JSON.parse(this.responseText);
//             if (!response.error) {
//                 document.getElementById("about").innerHTML = response.data;
//             } else error.innerHTML = this.responseText;
//         }
//     };
// }
// fetchText();

export function ajaxRequest(method, route, data) {
    let xhttp = new XMLHttpRequest();
    xhttp.open(method, `http://localhost/job/controller/${route}`, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    if (data) {
        let jsonData = JSON.stringify(data);
    }
    xhttp.send("data=" + jsonData);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            return response;
        }
    };
}
