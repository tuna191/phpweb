<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- <style>
        table, tr, td {
  border: 1px solid black;
}
    .ml{
        height: 200px ;
    }
    .sml{
        height: 100px;
    }
    .wsml{
        width: 30% ;
    }
    .wml{
        width: 70%;
    }
    *{
        text-decoration: none;
    list-style: none;
    color: black;
    }
    </style> -->
</head>

<body>

    <table>
        <tr class="banner">
            <td class="middle">
                <a href="index.php" class = "linkLogo"><img src="./Shopee-Logo.png" alt="" class="logo" /></a>
                <form action="#" method="get" class="search-bar">
                    <div class="box">
                        <div class="container-4">
                            <input type="search" id="search" placeholder="Search..." name="search" />
                            <button class="icon" type="submit" name="submitInput"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </td>
            <td style="text-align: end;padding: 5px 20px 0 20px;">
                <a href="checkAdmin.php">Admin</a>
            </td>
        </tr>
        <tr style=" background: white; display: flex; flex-direction: row; ">
            <td class="wsml">
                <?php
                    include_once("view/vCompany.php");
                ?>

            </td>
            <td class="wml">
                <form action="#" method="get" class="orderBy">
                    <h2>tìm kiếm theo giá</h2>
                    <a href="index.php?price=1">Từ cao đến thấp</a>
                    <a href="index.php?price=2">Từ thấp đến cao</a>
                </form>
                <?php
                    include_once("view/vProduct.php");
                ?>
            </td>
        </tr>
        <tr style="display: flex;">
            <td  class="sml">
                Footer
            </td>
        </tr>

    </table>

</body>

</html>