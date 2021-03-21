<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chi tiết hàng hóa</title>
    <link rel = "icon" href =  "../img/logo_title.jpg" type = "image/x-icon"> 
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        include './session.php';
        include './searchbar.php';
        include './menu.php'; 
        
        if(isset($_GET['ten'])){
            $sql = "select * from HangHoa where TenHH = '$_GET[ten]' and Mau='default'";
            if(isset($_GET['mau'])){
                $sql = "select * from HangHoa where MSHH = '$_GET[ten]' and Mau ='$_GET[mau]'";
            }
            include '../sql/select.php';
            // while($row = mysqli_fetch_assoc($result)){
                $row = mysqli_fetch_assoc($result);
                if($row['Mau']== 'default'){
                    ?>
                        <div id="phone">
        <table>
            <tr>
                <td>
                    <div id="phoneimg">
                        <img src="<?php echo $row['Hinh'] ?>" alt="">
                    </div>
                </td>
                <td> 
                    <div id="information">
                        <h3><?php echo $row['TenHH'] ?></h3>
                        <h1><?php echo $row['Gia'] ?> vnd</h1>
                        <div id="buynow"><a href="#">MUA NGAY</a></div>
                        <div id="carts"><a href="../functions/addcart.php?mshh=<?php echo $row['MSHH'];?>" onclick="return addcart();">THÊM VÀO GIỎ</a></div>
                        <h3>trong kho: <?php echo $row['SoLuongHang'] ?></h3>
                        <div id="baohanh">
                            <center>
                                <h3>chế độ bảo hành</h3>
                                <h4>1 đổi 1 trong vòng 3 tháng bởi bất kì sự cố nào </h4>
                                <h4>bảo hành máy trong 2 năm trong bất kì showroom trên Việt Nam</h4>
                                <h5>bảo hành phần cứng mặc định, bao gồm nguồn , màn hình , vân tay ,rơi móp , vào nước </h5>
                            </center>
                        </div>

                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="thongtin">
                        <h3 style="padding-left:5px;">thông tin sản phẩm: <br> </h3>
                        <p id="mota" style="padding-left:5px;"><?php echo $row['MoTaHH'] ?></p>
                    </div>
                </td>
                <td>
                    <div id=table>
                        <h2>thông số : </h2>
                        <?php echo $row['ThongSo'] ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="offer">
    </div>


                    <?php
                }
            // }
        }
        if(isset($_GET['pid'])){
            $sql = "select * from HangHoa where MSHH = '$_GET[pid]'";
            include '../sql/select.php';
            // while($row = mysqli_fetch_assoc($result)){
                $row = mysqli_fetch_assoc($result);
                
                    ?>
                        <div id="phone">
        <table>
            <tr>
                <td>
                    <div id="phoneimg">
                        <img src="<?php echo $row['Hinh'] ?>" alt="">
                    </div>
                </td>
                <td> 
                    <div id="information">
                        <h3><?php echo $row['TenHH'] ?></h3>
                        <h1><?php echo $row['Gia'] ?> vnd</h1>
                        <div id="buynow"><a href="../functions/addcart.php?mshh=<?php echo $row['MSHH'];?>" onclick="return addcart();" style="<?php if($row['SoLuongHang']==0) echo "pointer-events: none"; ?> ">MUA NGAY</a></div>
                        <div id="carts"><a href="../functions/addcart.php?mshh=<?php echo $row['MSHH'];?>" onclick="return addcart();" style="<?php if($row['SoLuongHang']==0) echo "pointer-events: none"; ?> "    >THÊM VÀO GIỎ</a></div>
                        <h3>trong kho: <?php echo $row['SoLuongHang'] ?></h3>
                        <div id="baohanh">
                            <center>
                                <h3>chế độ bảo hành</h3>
                                <h4>1 đổi 1 trong vòng 3 tháng bởi bất kì sự cố nào </h4>
                                <h4>bảo hành máy trong 2 năm trong bất kì showroom trên Việt Nam</h4>
                                <h5>bảo hành phần cứng mặc định, bao gồm nguồn , màn hình , vân tay ,rơi móp , vào nước </h5>
                            </center>
                        </div>

                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="thongtin">
                        <h3 style="padding-left:5px;">thông tin sản phẩm: <br> </h3>
                        <p id="mota" style="padding-left:5px;"><?php echo $row['MoTaHH'] ?></p>
                    </div>
                </td>
                <td>
                    <div id=table>
                        <h2>thông số : </h2>
                        <?php echo $row['ThongSo'] ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="offer">
    </div>


                    <?php
                
            // }
        }
    ?> 
    <?php 
        include "./fooder.php";
    ?>

    <script>
        function  addcart() {
            var mskh = "<?php echo $_SESSION['MSKH'] ?>";
            if( mskh =="-1"){
                alert("bạn chưa đăng nhập ");
                
                location.href = "sign.php";
                return false;
            }
            return true;
        }
    </script>
</body>
</html>