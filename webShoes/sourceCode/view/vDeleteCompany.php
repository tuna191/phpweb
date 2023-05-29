<?php
    
        include_once('controller/cCompany.php');     

        if(isset($_GET['id'])){
            $ID = $_GET['id'];

        $p = new controlCompany;
        $result = $p -> DeleteCompany($ID);
        if(!$result){
            echo "<script>alert ('Xoa ko thanh cong')</script>";
        }else{
            echo "<script>alert ('Xoa thanh cong')</script>";
        }
    }

    ?>