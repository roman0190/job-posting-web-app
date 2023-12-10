

function validateEvent() {
    
    var title = document.getElementById("title").value;
    var location = document.getElementById("location").value;
    var date = document.getElementById("date").value;
    var description = document.getElementById("description").value;
    var contact_info = document.getElementById("contact_info").value;

    if (title === "" || location === "" || date === "" || description === "" || contact_info === "") {
        alert("All fields must be filled out");
        return false;
    }

   
    if (title !== title.toUpperCase()) {
        alert("Title must have all uppercase letters");
        return false;
    }

    if (description.split(/\s+/).length > 500) {
        alert("Description cannot contain more than 500 words");
        return false;
    }

    return true;
}


   
function create() {

    if (!validateEvent()) {
        return;
    }
    
    let title = document.getElementById("title").value;
    let date = document.getElementById("date").value;
    let contact_info = document.getElementById("contact_info").value;
    let location = document.getElementById("location").value;
    let description = document.getElementById("description").value;
   

    let xhttp = new XMLHttpRequest();
    xhttp.open(
        "POST",
        "../../controller/Event/createCheck.php",
        true
    );
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        title: title,
        date: date,
        contact_info: contact_info,
        location: location,
        description: description,
        
    };
    let jsondata = JSON.stringify(data);
    
    xhttp.send("data=" + jsondata);
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
