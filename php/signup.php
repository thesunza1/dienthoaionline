<?php 
        $usernames=$_POST['uname'];
        $password = $_POST['pass'];
        $HoTen = $_POST['u_name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $sql =  "select * from KhachHang where Username ='$usernames'";
        include '../sql/select.php';
       

        if($result->num_rows==0){
            $sql = "insert into KhachHang (Username,Passwords,HoTenKH,DiaChi,SoDienThoai)  values ('$usernames','$password','$HoTen','$address','$phone')";
            include '../sql/select.php';
            
            ?>
            <script>
            setTimeout(() => {
                alert("tao tk thanh cong");
                window.location.href= "../php/sign.php";
            }, 2000);
            </script>
            <?php
        }
        else {
            
            ?>
            <script>
            alert("username đã tồn tại");
            setTimeout(() => {
                window.location.href= "../php/sign.php";
            }, 2000);
            </script>
            <?php
        }
?>
