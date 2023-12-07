let flag=document.getElementById("details")


function getdescription(){
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controller/LandingPage/abc.php', true);
   
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send()
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
          console.log(this.responseText)
          flag.innerHTML=this.responseText;
          
        }
    }
}
getdescription()
function updatedescription(){
    let newDescription=document.getElementById("newDescription").value
    console.log(newDescription)
    let xhttp = new XMLHttpRequest();
    console.log("fadfa")
    xhttp.open('POST', '../../controller/LandingPage/updatedescription.php', true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("update="+newDescription+"&change="+newDescription)
   
    xhttp.onreadystatechange = function(){


        if(this.readyState == 4 && this.status == 200){
          console.log(this.responseText)
          getdescription()
          
        }
    }
}