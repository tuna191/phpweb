<?php
    include_once("controller/cProduct.php");

    $p = new controlProduct();

    if(isset($_REQUEST['comp'])){
        $comp = $_REQUEST['comp'];
        $num = 6;
        $resultView = $p->getItemProduct($comp);        
    }elseif(isset($_GET['submitInput'])){
        $keyFind = $_GET['search'];
        $num = 4;
        $resultView = $p -> getProductBySearch($keyFind);

    }
    elseif(isset($_GET['price'])){
        $price = $_GET['price'];
        switch ($price) {
            case '1':
                $order = 'DESC';
                $num = 5;
                 $resultView = $p -> getProductOrder($order);
                break;
            case '2':
                $order = 'ASC';
                $num = 5;
                 $resultView = $p -> getProductOrder($order);
                break;
            default:
                echo "loi xap xep";
                break;
        }
    }
    else{
        // $resultView = $p->getAllProduct();
        $page = isset($_REQUEST['page'])? $_REQUEST['page']: 0 ;
        $count =$p->countItem();
        $num = 4;
        $resultView = $p ->getAllProductPage($page,$num);
    }

    if($resultView){
        if( $resultView->num_rows >0 ){
            $dem = 0;
            echo "<table >";

            while($row = mysqli_fetch_assoc($resultView)){
                $formatted_price = number_format($row['PricePr'], 0, ',', '.');
                if($dem ==0){
                    echo "<tr>";
                }

                echo "<td >";
                echo "<div class='product'>";
                echo "<image  src='Image/".$row['ImagePr']."' class='imgPr'/>";
                echo "<div class='description'>";
                echo "<h3 class='namePr'>".$row['NamePr']."</h3>";
                echo "<h4 class='PricePr'>".$formatted_price."VND"."</h4>";
                echo "<h5 class='quantity'>Đã bán" .$row['QuantitySold']."</h5>";
                echo "<h6 class='factory'>".$row['Factory']."</h6>";
                $dem++;
                if($dem%$num==0){
                    echo "</tr>";
                    $dem=0;
                }
            }
            echo "</table>";
            if(isset($count)){
                echo "<ul style='display: flex;flex-direction: row;justify-content: space-around;width: 60%;margin: auto;padding: 20px 10px;'>";
                $numPage = round($count/$num);
                for($x =0 ; $x < $numPage;$x++){
                    echo "<a href='index.php?page=".$x."'>".($x+1)."</a>"."<br>";
                }
                echo "</ul>";
            }
            }else{
                echo "Không có sản phẩm";
            }
        
    }else{
        echo "ko gia tri ";
    }
?>