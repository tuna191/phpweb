<?php
    include_once("controller/cProduct.php");

    $p = new controlProduct();
     $resultView = $p ->getAllProduct();

     if($resultView){
        if( $resultView->num_rows >0 ){
            echo "<table style='width:100%'>";
            echo "<tr> 
            <th>Image</th>
            <th>NameProduct</th>
            <th>Price</th> 
            <th>Quantity</th> 
            <th>Action</th> 
            </tr>";
            while($row = mysqli_fetch_assoc($resultView)){
                echo "<tr>";
                echo " <td><image style=' width:100px ; height:120px' ; src='Image/".$row['ImagePr']."'/></td>";
                echo "<td><h4>".$row['NamePr']."</h4></td>";
                echo "<td><h4>".$row['PricePr']."</h4></td>";
                echo "<td><h4>".$row['QuantitySold']."</h4></td>";
                echo "<td ><a href='admin.php?modifyProduct&id=".$row['ProdID']."'>"."modify"."</a> |<a href='admin.php?DeleteProduct&id=".$row['ProdID']."'>"."delete"."</a></td>";
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