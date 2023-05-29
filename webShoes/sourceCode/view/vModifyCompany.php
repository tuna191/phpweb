<body>
    <h3>Sua San Pham </h3>
    <?php
        $ID = $_GET['id'];
    ?>
    <form action="#" method="post" enctype="multipart/form-data" >
    <table style="margin:auto; text-align: center; width:100%;  height:100vh">
        <tr >
            <td>Ma Cong Ty </td>
            <td>
                <input type="text" name="CompID" value = <?php echo $ID; ?> >
            </td>
        </tr>
        <tr >
            <td>Ten Cong Ty</td>
            <td>
                <input type="text" name="CompName" require>
            </td>
        </tr>
        <tr >
        <td>Dia Chi</td>
            <td>
                <input type="text" name="CompAddress" require>
            </td>
        </tr>
        <tr >
        <td>Email</td>
            <td>
                <input type="text" name="Email" require>
            </td>
        </tr>
        
        <tr >
            <td colspan="2">
                <input type="submit" name="submit" ></input>
            </td>
        </tr>

    </table>
    <?php
        include_once('controller/cCompany.php');

        if(isset($_POST['submit'])){
       
            $CompID = $_POST['CompID'];
            $ComIDAfter = $ID;
            $CompName = $_POST['CompName'];
            $CompAddress = $_POST['CompAddress'];
            $Email = $_POST['Email'];
            
        $p = new controlCompany;
        $result = $p -> ModifyCompany($ID,$CompID,$CompName,$CompAddress,$Email);
        switch($result){
            case 0:
                echo "<script>alert ('khong the modify')</script>";
            case 1:
                echo "<script>alert ('sua du lieu thanh cong')</script>";
                break;
            default:
                echo "<script>alert ('loi gi do')</script>";
        };
    }
    ?>
    </form>

<body>