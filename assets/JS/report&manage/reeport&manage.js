function Jobs(){
    
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/reportJobandApplicantcheck/reportJobandApplicantcheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send()
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            
            document.getElementById('job').innerHTML = this.responseText;
        }
    }
}


function Applicants(){
    
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/reportJobandApplicantcheck/reportJobandApplicantcheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send()
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            
            document.getElementById('applicant').innerHTML = this.responseText;
        }
    }
}

setInterval(function () {
    Jobs();
    Applicants();
}, 500);