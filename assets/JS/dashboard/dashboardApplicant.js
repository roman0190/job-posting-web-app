function getValue() {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/dashboard/dashboardCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let userInfo = JSON.parse(this.responseText);
            document.getElementById('name').innerHTML = userInfo.name;
            document.getElementById('role').innerHTML = userInfo.role;
        }
    };
}

document.addEventListener("DOMContentLoaded", function () {
    getValue();

});
