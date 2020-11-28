<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
<?php
        include "./session.php";
        include "./searchbar.php";
        include "./menu.php";
        
        ?>
        <div id="allcart">
        <div class= "header">
            <table>
                <tr>
                    <td id="tsp">sản phẩm</td>
                    <td>đơn giá</td>
                    <td>số lượng</td>
                    <td>trang thai</td>
                    <td>thao tác</td>
                </tr>
            </table>
        </div>
        <?php
            $mskh = $_SESSION['MSKH'];
            $sql = "select SoDonDH,TrangThai from dathang where MSKh =$mskh";
            include '../sql/select.php';
            $dathang = $result;
            // lay sodondh va trangthai don hang 
            while($dtdathang = mysqli_fetch_assoc($dathang)){
                $sohd = $dtdathang['SoDonDH'];
                $sql ="select hanghoa.* from hanghoa inner JOIN chitietdathang on hanghoa.MSHH=chitietdathang.MSHH where chitietdathang.SoDonDH= $sohd";
                include '../sql/select.php';
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="displaysp">
                    <table>
                        <tr>
                            <td class="tsp">
                               <table>
                                   <tr>
                                    <td class="imgcart"><img src="<?php echo $row['Hinh'] ?>" alt="">
                                            <h3><?php echo $row['TenHH'] ?> </h3>
                                   </tr>
                                        </td>
                               </table> 
       
                            </td>
                            <td><?php echo $row['Gia'] ?> VNĐ</td>
                            <td>
                                <p class="sl">1</p>
                            </td>
                            <td><?php echo $dtdathang['TrangThai'] ?></td>
                            <td><a id="delete" href="../functions/deletecart.php?mshh=<?php echo $row['MSHH']?>&hh=1&pid=<?php echo $sohd?>"
                            style="<?php if($dtdathang['TrangThai']=="shipping") echo "visibility: hidden;"; ?> "
                            >delete </a></td>
                        </tr>
                    </table>
                </div>
                        <?php
                }
            } 
            
                ?>
     
        
    </div>

    

    <script>
        
    </script>
</body>
</html>