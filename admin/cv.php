<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        //hh=1 chinh sua khach hang
        //hh=2 chinh sua nhan vien
        include './session.php';
        include './searchbar.php';
        if($_GET['hh']==1){
            $mskh= $_GET['pid'];
            $sql = "select * from khachhang where MSKH=$mskh";
        

        
        include '../sql/select.php';
        $row= mysqli_fetch_assoc($result);
        
    ?> 
    
    <div id="cv">
    
    <form class="sign"  action="./chinhsuacv.php?&hh=2&pid=<?php echo $row['MSKH']?>"  method="post">
                <center>

                        <h1>thông tin khach hang </h1>
                        <p>username:</p>
                        <input type="text"  value=<?php echo $row['Username']?> autocomplete="off" name="uname" pattern="[A-Z,a-z]{1,16}" required>
                        <br>
                        <p>password :</p>
                        <input pattern="[0-9,A-Z,a-z]{1,30}"  required type="password" name="pass" placeholder="current password" autocomplete="off">
                        <br>
                        <p>new password :</p>
                        <input pattern="[0-9,A-Z,a-z]{1,30}" required type="password" name="npass" placeholder="password" autocomplete="off">
                        <br>
                        <p>name:</p>
                        <input value="<?php echo $row['HoTenKH']?>" pattern=".{4,50}" required type="text" name="u_name" placeholder="name" autocomplete="off">
                        <br>
                        <p>number phone:</p>
                        <input value="<?php echo $row['SoDienThoai']?>" pattern="[0-9]{9,11}" required type="tel" name="phone" placeholder="phone" autocomplete="off">
                        <br>
                        <p>address</p>
                        <input value="<?php echo $row['DiaChi']?>" pattern=".{1,80}" required type="text" name="address" placeholder="address" autocomplete="off">
                        <br>
                        
                        <button type="submit" style="width : 100px;height: 30px;">lưu thay đổi </button>
                </center>
       </form></div>
       <?php
        }
        if($_GET['hh']==2){
            $msnv= $_GET['pid'];
            $sql = "select * from nhanvien where MSNV=$msnv";
        

        
        include '../sql/select.php';
        $row= mysqli_fetch_assoc($result);
        
    ?> 
    
    <div id="cv">
    
    <form class="sign"  action="./chinhsuacv.php?&hh=3&pid=<?php echo $row['MSNV']?>"  method="post">
                <center>
                        <h1>thông tin khach hang </h1>
                        <p>username:</p>
                        <input type="text"  value=<?php if($row['Username']==null ) {
                            echo "trống";
                        }else echo $row['Username']?> autocomplete="off" name="uname"  pattern="[A-Z,a-z]{1,16}" required>
                        <br>
                        <p>password :</p>
                        <input pattern="[0-9,A-Z,a-z]{1,30}"   type="password" name="pass" placeholder="current password" autocomplete="off">
                        <br>
                        <p>new password :</p>
                        <input pattern="[0-9,A-Z,a-z]{1,30}" required type="password" name="npass" placeholder="password" autocomplete="off">
                        <br>
                        <p>name:</p>
                        <input value="<?php echo $row['HoTenNV']?>" pattern=".{4,50}" required type="text" name="u_name" placeholder="name" autocomplete="off">
                        <br>
                        <p>number phone:</p>
                        <input value="<?php echo $row['SoDienThoai']?>" pattern="[0-9]{9,11}" required type="tel" name="phone" placeholder="phone" autocomplete="off">
                        <br>
                        <p>address</p>
                        <input value="<?php echo $row['DiaChi']?>" pattern=".{1,80}" required type="text" name="address" placeholder="address" autocomplete="off">
                        <br>
                        
                        <button type="submit" style="width : 100px;height: 30px;">lưu thay đổi </button>
                </center>
       </form></div>
       <?php
        }




            ?>
</body>
</html> 