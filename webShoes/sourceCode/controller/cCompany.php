<?php
include_once("model/mCompany.php");

class controlCompany{
    function getAllCompany(){
        $p = new modelCompany;

        $resultAllItem = $p-> sellectAllCompany();
        return $resultAllItem;
    }

    function ModifyCompany($ID,$CompID,$CompName,$CompAddress,$Email){
                    $p = new modelCompany;
                    $result = $p -> ModifyIntoTableCompany($ID,$CompID,$CompName,$CompAddress,$Email);
                    if($result){
                        return 1;//
                    }else{
                        return 0; // ko the modify
                    }        

    }
        function DeleteCompany($ID){
                    $p = new modelCompany;
                    $result = $p -> DeleteIntoTableCompany($ID);
                    return $result;
    }

}
?>