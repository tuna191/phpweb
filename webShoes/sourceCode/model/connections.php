<?php
    class openConnect{
        function connectDB(& $cont){
            $cont = mysqli_connect("localhost","21118311","21118311");
           // dùng để đọc tiếng việt 
           $cont -> set_charset("utf8");
            if($cont){
                return mysqli_select_db($cont,"datashoes");
            }else{
                return false;
            }
        }

        function closeDB($cont){
            mysqli_close($cont);
        }
    }
?>