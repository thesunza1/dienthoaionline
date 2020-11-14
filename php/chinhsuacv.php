<?php 
        $usernames=$_POST['uname'];
        $password = $_POST['pass'];
        $npass = $_POST['npass'];
        $HoTen = $_POST['u_name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        session_start();
        $MSKH= $_SESSION['MSKH'];
        $sql =  "select * from KhachHang where Username ='$usernames'";
        include '../sql/select.php';

        if($result->num_rows==1){
            $sql =  "select * from KhachHang where Username ='$usernames' and Passwords='$password'";
            include '../sql/select.php';
            if($result->num_rows==1){
                $sql = "update KhachHang set Username='$usernames',Passwords='$npass',HoTenKH='$HoTen',DiaChi='$address',SoDienThoai='$phone' where MSKH=$MSKH" ;
                include '../sql/select.php';
                ?>
                <script>
               
                window.location.href= "../php/sign.php";
                </script>
                <?php
            }
            else {
                echo "password sai ";
                ?>
                <script>
                setTimeout(() => {
                    window.location.href= "../php/sign.php";
                }, 2000);
                </script>
                <?php
            }
            

           
        }
        else {
            echo "username đã tồn tại ";
            echo $result->rows_num;
            ?>
            <script>
            setTimeout(() => {
                window.location.href= "../php/sign.php";
            }, 2000);
            </script>
            <?php
        }

       
?>
