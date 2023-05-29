<?php
    include_once("connections.php");
    

    class modelCompany{
        function sellectAllCompany(){
            $con = 0;
            
            $p = new openConnect();
            if($p->connectDB($con)){
                $selectAll ="select * from company";
                $resultAll =$con ->query($selectAll);

                $p ->closeDB($con);

                return $resultAll;
            }else{
                return false; 
            }
        }

        function ModifyIntoTableCompany($ID,$CompID,$CompName,$CompAddress,$Email){
            $conn = 0;
            $p = new openConnect();
            if($p->connectDB($con)){
                $InsertIntoCO =" UPDATE `company` SET `CompID`='$CompID',`CompName`='$CompName',`CompAddress`='$CompAddress',`Email`='$Email' WHERE CompID = '$ID'";
                echo $InsertIntoCO;
                $resultAll =$con ->query($InsertIntoCO);
                $p ->closeDB($con);
                return $resultAll;
            }else{
                return false; 
            }
        }

        function DeleteIntoTableCompany($ID){
            $conn = 0;
            $p = new openConnect();
            if($p->connectDB($con)){
                $InsertIntoPR ="DELETE FROM `company` WHERE CompID = '$ID'";
                $resultAll =$con ->query($InsertIntoPR);
                $p ->closeDB($con);
                return $resultAll;
            }else{
                return false; 
            }
        }
    }
?>