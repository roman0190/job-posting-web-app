function getNotification() {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/notification/notificationCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);

            if ("error" in response) {
                document.getElementById('newNotification').innerHTML = response.error;
            } else if ("message" in response) {
                document.getElementById('newNotification').innerHTML = response.message;
            } else if ("notifications" in response) {
                let notifications = response.notifications;
                let notificationHtml = "";

                notifications.forEach(notification => {
                    notificationHtml += `<div>
                        ${notification.username} ${notification.message}
                    <button onclick="clearNotification(${notification.id})">Clear</button><br><hr><br>
                    </div>`;
                });
                document.getElementById('newNotification').innerHTML = notificationHtml;
            }
        }
    }
}


function clearNotification(notificationId) {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/notification/clearNotification.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("notificationId=" + notificationId);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);
            getNotification();
            alert(response.success);
           
        }
       
    };
   

}

getNotification();
setInterval(getNotification, 500);