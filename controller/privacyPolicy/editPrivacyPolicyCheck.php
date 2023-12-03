<?php 
    require_once("../../model/policyModel.php");

     $policy =$_POST['policy-input'];

     if(isset($policy))
     {
        
        if(!policyEdit($policy)){

            echo policyEdit($policy);
        } else {
            $user = policyView();
            echo $user["policy"];
        }
     }

?>