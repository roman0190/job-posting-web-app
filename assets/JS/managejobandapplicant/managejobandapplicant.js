function manageJobs(){
    
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/manageReport/manageReportedjobcheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send()
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            
            document.getElementById('head').innerHTML = this.responseText;
        }
    }
}


function manageApplicants(){
    
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/manageReport/manageReportedapplicantcheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send()
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            
            document.getElementById('head').innerHTML = this.responseText;
        }
    }
}