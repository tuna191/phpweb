<?php
    
        include_once('controller/cProduct.php');     

        if(isset($_GET['id'])){
            $ID = $_GET['id'];

        $p = new controlProduct;
        $result = $p -> DeleteProduct($ID);
        if(!$result){
            echo "<script>alert ('Xoa ko thanh cong')</script>";
        }else{
            echo "<script>alert ('Xoa thanh cong')</script>";
        }
    }

    ?>