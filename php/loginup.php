
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sai roi</title>
</head>
<body>
<?php 
    $username = $_POST['username_login'];
    $password = $_POST['password_login'];
    session_start();
    $sql = "select * from KhachHang where Username = '$username' and Passwords = '$password'";
    
    include "../sql/select.php";
    $dem = $result->num_rows;
    if ( $dem>0 ) { 
        $row = mysqli_fetch_assoc($result);     
        $_SESSION['MSKH']  =  $row['MSKH'];
        $_SESSION['HoTenKH'] = $row['HoTenKH'];?>
        <?php
        header("Location: ../php/index.php");
        // echo $_SESSION['MSKH'];
    }
    else{
        echo "<h1>loi dang nhap hoac tai khoang ko ton tai .</h1>";
        echo "<a href='./sign.php' >quay ve dang nhap</a>";
        ?>
        <script>
            setTimeout(() => {
                window.location.href= "../php/sign.php";
            }, 4000);
        </script>
        <?php

    }
    
?>
</body>
</html>
