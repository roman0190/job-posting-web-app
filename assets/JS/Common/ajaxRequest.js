export function ajaxRequest(method, route, data) {
    return new Promise((resolve, reject) => {
        let xhttp = new XMLHttpRequest();
        xhttp.open(method, `http://localhost/job-posting-web-app/controller/${route}`, true);
        xhttp.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
        );

        let jsonData = "";
        if (data) {
            jsonData = JSON.stringify(data);
        }

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    console.log(this.responseText);
                    let response = JSON.parse(this.responseText);
                    resolve(response);
                } else {
                    reject(
                        new Error(`Request failed with status ${this.status}`)
                    );
                }
            }
        };

        xhttp.send("data=" + jsonData);
    });
}
