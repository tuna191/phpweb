<?php
    include_once("controller/cCompany.php");

    $p = new controlCompany();
     $resultView = $p ->getAllCompany();

     if($resultView){
        if( $resultView->num_rows >0 ){
            echo "<table style='width:100%'>";
            echo "<tr> 
            <th>ID</th>
            <th>Company Name</th>
            <th>Company Address</th> 
            <th>Email</th> 
            </tr>";
            while($row = mysqli_fetch_assoc($resultView)){
                echo "<tr>";
                echo "<td><h4>".$row['CompID']."</h4></td>";
                echo "<td><h4>".$row['CompName']."</h4></td>";
                echo "<td><h4>".$row['CompAddress']."</h4></td>";
                echo "<td><h4>".$row['Email']."</h4></td>";
                echo "<td ><a href='admin.php?modifyCompany&id=".$row['CompID']."'>"."modify"."</a> |<a href='admin.php?DeleteCompany&id=".$row['CompID']."'>"."delete"."</a></td>";
                echo "</tr>";

            }
            echo "</table>";

            }else{
                echo "ERROR PRINT";
            }
        
    }else{
        echo "ko gia tri ";
    }
?>