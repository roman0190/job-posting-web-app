function saveChanges(){
    let name = document.getElementById("name").value
    let email = document.getElementById("email").value
    let gender = document.getElementById("gender").value
    let dob = document.getElementById("dob").value
    let errorElement = document.getElementById("error")
    errorElement.innerHTML = ""
    let error = ""

    if(name === ""){
        error+="Fill in your name!<br>"
    }
    if(email === ""){
        error+="Fill in your email!<br>"
    }
    if(gender === ""){
        error+="Fill in your gender!<br>"
    }
    if(dob === ""){
        error+="Fill in your date of birth!<br>"
    }

    if(error){
        console.log("problem222")
        errorElement.innerHTML = error
    }
    else{
        console.log("problem")
        updateProfile(name, email, gender, dob)
    }
    
}

function updateProfile(name, email, gender, dob){
    //alert(name, email, gender, dob)
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/ManageProfile/editCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    //json
    let data={
        "name": name,
        "email": email,
        "gender": gender,
        "dob": dob
    }
    let dataJson=JSON.stringify(data)
    console.log(dataJson)
    xhttp.send('data=' +dataJson)
    
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            let response = this.responseText 
            let data = JSON.parse(response)
            console.log(data)
            if(data.success){
                window.location.replace("../ManageProfile/viewProfile.php");
            }

            else{
                let errorElement = document.getElementById("error")
                errorElement.innerHTML = "There was an error!"
            }

        }
    }
}