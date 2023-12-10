function saveCheck(){

}

export async function saveJob(id){
    let xhttp = new XMLHttpRequest();
    xhttp.open('GET', `../../controller/SaveJobForLater/saveJobCheck.php?id=${id}`, true);
    xhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){
                console.log(this.responseText);
                let response = JSON.parse(this.responseText);
                if(response.success)alert("saved")
        }
    };

    xhttp.send();
}

export async function unsaveJob(id){
    let xhttp = new XMLHttpRequest();
    xhttp.open('GET', `../../controller/SaveJobForLater/unsaveJobCheck.php?id=${id}`, true);
    xhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){
                console.log(this.responseText);
                let response = JSON.parse(this.responseText);
                if(response.success){alert("unsaved")
                window.location.reload()
            
            }

        }
    };

    xhttp.send();
}