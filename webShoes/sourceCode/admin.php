<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td,th {
  border: 1px solid black;
}
    .ml{
        height: 200px ;
    }
    .sml{
        height: 100px;
    }
    .wsml{
        max-width: 30% ;
    }
    .wml{
        max-width: 70%;
    }
    *{
        text-decoration: none;
    list-style: none;
    color: black;
    }
    </style>
</head>
<body>

    <table style="margin:auto; text-align: center; width:960px;  height:100vh">
        <tr >
            <td colspan="2" class="ml">
                Banner
            </td>
        </tr>
        <tr >
            <td colspan="2" class="sml " style="text-align: initial;">
                <a href="index.php">Trang chu</a> 
            </td>
        </tr>
        <tr >
        <td class="wsml"> 
                <a href="admin.php?addPR">Them san pham</a>
                <br>
                <a href="admin.php?manageProduct">Quan Ly San Pham</a>
                <br>
                <a href="admin.php?manageCompany">Quan ly Cong Ty</a>

            </td>
            <td class="wml"> 
            <?php
                if(isset($_REQUEST['addPR']) || isset($_GET['submit'])){
                    include('view/vAddProduct.php');
                }elseif(isset($_REQUEST['manageProduct']) ){
                    include('view/vManageProduct.php');
                }elseif(isset($_REQUEST['manageCompany']) ){
                    include('view/vManageCompany.php');
                }elseif(isset($_REQUEST['modifyProduct'])){
                    include('view/vModifyProduct.php');
                }elseif(isset($_REQUEST['DeleteProduct'])){
                    include('view/vDeleteProduct.php');
                }elseif(isset($_REQUEST['modifyCompany'])){
                    include('view/vModifyCompany.php');
                }elseif(isset($_REQUEST['DeleteCompany'])){
                    include('view/vDeleteCompany.php');
                }
                else{
            echo "TRANG CUA ADMIN";

                }
    ?>
            </td>
        </tr>
        <tr >
            <td colspan="2"class="sml">
                Footer
            </td>
        </tr>

    </table>
    
</body>
</html>