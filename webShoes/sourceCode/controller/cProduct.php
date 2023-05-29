<?php
include_once("model/mProduct.php");

class controlProduct{
    function getAllProduct(){
        $p = new modelProduct;

        $resultAllItem = $p-> sellectAllProduct();
        return $resultAllItem;
    }
    function getItemProduct($comp){
        $p = new modelProduct;
        
        $resultAllItem = $p-> sellectItemProduct($comp);
        return $resultAllItem;
    }
    function countItem(){
        $p = new modelProduct;
        $resultAllItem = $p-> sellectAllProduct();
        return mysqli_num_rows($resultAllItem);
    }

    function getAllProductPage($page,$count){
        $p = new modelProduct;
        $pages =($page)*$count;
        $resultAllItem = $p-> selectAllProductPage($pages,$count);
        return $resultAllItem;
    }

    function AddProduct($ProdName,$ProdPrice,$file,$ProdImage,$ProdDescription,$CompID,$typeImg,$sizeImg){
        $array = ['image/jpeg','image/png'];
        if(in_array($typeImg,$array)){
            if($sizeImg < 3*1024*1024){
                if(move_uploaded_file($file["tmp_name"],'Image/'.$file['name'])){
                    $p = new modelProduct;
                    $result = $p -> InsertIntoTableProduct($ProdName,$ProdPrice,$ProdImage,$ProdDescription,$CompID);
                    if($result){
                        return 1;//
                    }else{
                        return 0; // ko the insert
                    }
                }else{
                    return -1; //ko the up load
                }
            }else{
                return 2; // kich thuoc qua lon
            }
        }else{
            return -3; // ko dung loai file;
        }

    }

    function ModifyProduct($ID,$ProdName,$ProdPrice,$file,$ProdImage,$ProdDescription,$CompID,$typeImg,$sizeImg){
        $array = ['image/jpeg','image/png'];
        if(in_array($typeImg,$array)){
            if($sizeImg < 3*1024*1024){
                if(move_uploaded_file($file["tmp_name"],'Image/'.$file['name'])){
                    $p = new modelProduct;
                    $result = $p -> ModifyIntoTableProduct($ID,$ProdName,$ProdPrice,$ProdImage,$ProdDescription,$CompID);
                    if($result){
                        return 1;//
                    }else{
                        return 0; // ko the modify
                    }
                }else{
                    return -1; //ko the up load
                }
            }else{
                return 2; // kich thuoc qua lon
            }
        }else{
            return -3; // ko dung loai file;
        }

    }
    function DeleteProduct($ID){
                    $p = new modelProduct;
                    $result = $p -> DeleteIntoTableProduct($ID);
                    return $result;
    }
    function getProductBySearch($keyFind){
        $p = new modelProduct;
        $result = $p -> ProductBySearch($keyFind);
        return $result;
    }

    function getProductOrder($order){
        $p = new modelProduct;
        $result = $p -> ProductOrderBy($order);
        // var_dump($result);
        return $result;
    }
}
?>