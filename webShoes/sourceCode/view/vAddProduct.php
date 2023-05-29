<body>
    <h3>Them san pham </h3>

    <form action="#" method="post" enctype="multipart/form-data" >
    <table style="margin:auto; text-align: center; width:100%;  height:100vh">
        <tr >
            <td>Ten san pham</td>
            <td>
                <input type="text" name="ProdName" require>
            </td>
        </tr>
        <tr >
        <td>Gia san pham</td>
            <td>
                <input type="text" name="ProdPrice" require>
            </td>
        </tr>
        <tr >
        <td>Anh san pham</td>
            <td>
                <input type="file" name="file" require>
            </td>
        </tr>
        <tr >
        <td>Mo ta san pham</td>
            <td>
                <input type="text" name="ProdDescription" require>
            </td>
        </tr>
        <tr>
        <td>Ten Cong ty</td>
        <td>
            <select name="nameCompany" id="">
            <?php
                 include("controller/cCompany.php");
                 $p = new controlCompany();
                 $resultAllView = $p->getAllCompany();
                 if($resultAllView){
                     if(mysqli_num_rows($resultAllView)>0){
                         while($row = mysqli_fetch_assoc($resultAllView)){
                             echo "<option value= '".$row["compID"]."'>".$row["compName"]."</option>"."<br>";
                         }
                         }else{
                             echo "ERROR PRINT";
                         }
                     
                 }else{
                     echo "ERROR";
                 }
            ?>
            </select>
                </td>
        </tr>
        <tr >
            <td colspan="2">
                <input type="submit" name="submit" ></input>
            </td>
        </tr>

    </table>
    <?php
        include_once('controller/cProduct.php');

        if(isset($_POST['submit'])){
       
            $ProdName = $_POST['ProdName'];
            $ProdPrice = $_POST['ProdPrice'];
            $file = $_FILES['file'];
            $ProdImage =  $file['name'];
            echo $ProdImage;
            $ProdDescription = $_POST['ProdDescription'];
            $CompID = $_POST['nameCompany'];
            $typeImg = $file['type'];
            $sizeImg = $file['size'];
        $p = new controlProduct;
        $result = $p -> AddProduct($ProdName,$ProdPrice,$file,$ProdImage,$ProdDescription,$CompID,$typeImg,$sizeImg);
        if(!$result){
            echo "<script>alert ('loai anh ko phu hop')</script>";
        }
        switch($result){
            case 0:
                echo "<script>alert ('khong the insert')</script>";
            case 1:
                echo "<script>alert ('them du lieu thanh cong')</script>";
                break;
            case 2:
                echo "<script>alert ('kich thuoc lon')</script>";
                break;
            case -1:
                echo "<script>alert ('ko the up load')</script>";
                break;
            case -3:
                echo "<script>alert ('loai anh ko phu hop')</script>";
                break;
            default:
                echo "<script>alert ('loi gi do')</script>";
        };
    }
    ?>
    </form>

<body>
