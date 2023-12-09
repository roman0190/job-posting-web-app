import { ajaxRequest } from "../Common/ajaxRequest.js";
var id = window.location.toString().split("?")[1]?.split("=")[1];

async function handleKick(){
    let res =await  ajaxRequest("GET","ApplyToJob/isAlreadyAppliedToThis.php",{id:id});
    if(res.alreadyApplied){
        console.log("afdaf")
        //window.location.replace("../../view/ApplyToJob/alreadyApplied.php");
    }
}
handleKick();