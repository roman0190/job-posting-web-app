function EUPDATE() {
    

    if (!validateEvent()) {
        return;
    }
    let event_id = document.getElementById("event_id").value;
    let title = document.getElementById("title").value;
    let date = document.getElementById("date").value;
    let contact_info = document.getElementById("contact_info").value;
    let location = document.getElementById("location").value;
    let description = document.getElementById("description").value;
   

    let xhttp = new XMLHttpRequest();
    xhttp.open(
        "POST",
        "../../controller/Event/editCheck.php",
        true
    );
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        event_id: event_id,
        title: title,
        date: date,
        contact_info: contact_info,
        location: location,
        description: description,
        
    };
    let jsondata = JSON.stringify(data);
    
    xhttp.send("data=" + jsondata + "&event_id=" + event_id);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let responseText = this.responseText;
            console.log(responseText);
            let data = JSON.parse(responseText);
            if (!data.error) {
                window.location.href = "adminEvent.php";
            } else error.innerHTML = data.error;
        }
    };
}
