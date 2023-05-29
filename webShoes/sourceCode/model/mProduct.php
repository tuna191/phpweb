<?php
    include_once("connections.php");

    class modelProduct{

        // lấy ra tất cả sản phẩm trong table 
        function sellectAllProduct(){
            $con = 0;
            
            $p = new openConnect();
            if($p->connectDB($con)){
                $selectAll ="select * from products";
                $resultAll =$con ->query($selectAll);

                $p ->closeDB($con);

                return $resultAll;
            }else{
                return false; 
            }
        }
        // lấy ra tất cả sản phẩm trong từng công ty

        function sellectItemProduct($prodId){
            echo $prodId;
            $con = 0;
            $p = new openConnect();
            if($p->connectDB($con)){
                $selectItem="SELECT * FROM `products` WHERE Company =". $prodId;
                $resultItem =$con ->query($selectItem);

                $p ->closeDB($con);
                return $resultItem;
            }else{
                return false; 
            }
        }
        // phân trang , với limit là giá trị bắt đầu , còn count là số lượng đếm 
        function  selectAllProductPage($limit, $count){
            $con = 0;
            
            $p = new openConnect();

            if($p->connectDB($con)){
                $selectAllPage ="SELECT * FROM products order by ProdID desc limit $limit,$count" ;
                $resultAll =$con ->query($selectAllPage);

                $p ->closeDB($con);

                return $resultAll;
            }else{
                return false; 
            }
        }
        function InsertIntoTableProduct($ProdName,$ProdPrice,$ProdImage,$ProdDescription,$CompID){
            $conn = 0;
            $p = new openConnect();
            echo $ProdImage;
            if($p->connectDB($con)){
                $InsertIntoPR ="INSERT INTO products ( ProdName, ProdPrice, ProdImage, ProdDescription, CompID) VALUES ";
                $InsertIntoPR .="(N'".$ProdName."',N'".$ProdPrice."',N'".$ProdImage."',N'".$ProdDescription."',N'".$CompID."')" ;
                $resultAll =$con ->query($InsertIntoPR);

                $p ->closeDB($con);

                return $resultAll;
            }else{
                return false; 
            }
        }
        function ModifyIntoTableProduct($ID,$ProdName,$ProdPrice,$ProdImage,$ProdDescription,$CompID){
            $conn = 0;
            $p = new openConnect();
            echo $ProdImage;
            if($p->connectDB($con)){
                $InsertIntoPR =" UPDATE `products` SET `ProdName`='$ProdName',`ProdPrice`='$ProdPrice',`ProdImage`='$ProdImage',`ProdDescription`='$ProdDescription',`CompID`='$CompID' WHERE ProdID = '$ID'";
                $resultAll =$con ->query($InsertIntoPR);
                $p ->closeDB($con);
                return $resultAll;
            }else{
                return false; 
            }
        }
        function DeleteIntoTableProduct($ID){
            $conn = 0;
            $p = new openConnect();
            if($p->connectDB($con)){
                $InsertIntoPR ="DELETE FROM `products` WHERE ProdID = '$ID'";
                $resultAll =$con ->query($InsertIntoPR);
                $p ->closeDB($con);
                return $resultAll;
            }else{
                return false; 
            }
        }

        function ProductBySearch($keyFind){
            $conn = 0;
            $p = new openConnect();

            if($p->connectDB($con)){
                $getProductSearch ="SELECT * FROM `products` WHERE NamePr LIKE  '%$keyFind%'";
                $resultAll =$con ->query($getProductSearch);
                $p ->closeDB($con);

                return $resultAll;
            }else{
                return false; 
            }
        }
// sap xep 
        function ProductOrderBy($order){
            $conn = 0;
            $p = new openConnect();

            if($p->connectDB($con)){
                // SELECT * FROM `products` ORDER BY PricePr DESC
                $getProductSearch ="SELECT * FROM `products` ORDER BY PricePr $order";
                $resultAll =$con ->query($getProductSearch);
                $p ->closeDB($con);

                return $resultAll;
            }else{
                return false; 
            }
        }
    }
?>