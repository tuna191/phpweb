<?php
    include_once("controller/cCompany.php");

    $p = new controlCompany();
    $resultAllView = $p->getAllCompany();
    if($resultAllView){
        if(mysqli_num_rows($resultAllView)>0){
            while($row = mysqli_fetch_assoc($resultAllView)){
                echo "<a href='index.php?comp=".$row["CompID"]."'>".$row["CompName"]."</a>";
            }
            }else{
                echo "ERROR PRINT";
            }
        
    }else{
        echo "ERROR";
    }
?>