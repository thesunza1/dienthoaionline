<?php
    $uname = $_POST['unameAdmin'];
    $upass = $_POST['passAdmin'];
    $sql="select * from nhanvien where Username='$uname' and Passwords='$upass' and ChucVu='admin'";
    
    include '../sql/select.php';
    if(mysqli_num_rows($result)==1) {
        session_start();
        $_SESSION['admin'] = "1";
        header("location:../admin/index.php");
        ?>
       

    <?php

    }
    else {
        ?>
            <script>
                alert("đăng nhập thất bại ");
                history.go(-1);
            </script>

        <?php
    }


?>