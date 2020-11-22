<?php 
        $usernames=$_POST['uname'];
        $password = $_POST['pass'];
        $npass = $_POST['npass'];
        $HoTen = $_POST['u_name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        
        include './session.php';
        $sql =  "select * from nhanvien where Username ='$usernames'";
        include '../sql/select.php';
        
        if($result->num_rows==1){
            
            $sql =  "select * from nhanvien where Username ='$usernames' and Passwords='$password' and ChucVu='admin'";
            
            include '../sql/select.php';
            
            if($result->num_rows==1){
                $sql = "update nhanvien set Username='$usernames',Passwords='$npass',HoTenNV='$HoTen',DiaChi='$address',SoDienThoai='$phone' where ChucVu='admin'" ;
                echo $sql;
                include '../sql/select.php';
                ?>
                <script>
                    window.location.href= "./cvkh.php";
                </script>
                <?php
            }
            else {
            
                ?>
                <script>
                    alert("password sai");
                setTimeout(() => {
                    window.location.href= "./cvkh.php";
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
