<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm hàng hóa</title>
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include "./session.php";
        include "./searchbar.php";
        $sql= "select * from nhomhanghoa";
        include "../sql/select.php";
        $ms=$result;
        $pid =$_GET['pid'];
        $sql= "select * from hanghoa where MSHH=$pid";
        include "../sql/select.php";
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="tshanghoa">
    <!-- ../functions/deletecart.php?hh=5 -->
        <form action="../functions/deletecart.php?hh=6&pid=<?php echo $pid?>" method="post"  enctype="multipart/form-data">
        <center>    
        <h1>thông tin hàng hóa </h1>
            <table>
                <tr><th><p>tên :</p></th>
                    <td><input type="text" autocomplete="on" name="namephone" pattern="{1,16}" required 
                        value= "<?php echo $row['TenHH']?>"
                    ></td></tr>
                    
                <tr><th><p>giá  :</p></th>
                    <td><input type="number"  autocomplete="on" name="gia" pattern="[0-9]{7,16}" required
                        value= "<?php echo $row['Gia']?>"
                    ></td></tr>    
                    
                <tr><th><p>số lượng :</p></th>
                    <td><input type="number"  autocomplete="on" name="soluong" pattern="[0-9]{1,16}" required
                        value= "<?php echo $row['SoLuongHang']?>"
                    ></td></tr>
                    
                <tr><th><p>màu:</p></th>
                    <td>
                    <select name="mau">
                            <option value="default" selected >đen</option>
                            <option value="white" >trắng</option>
                            <option value="red" >đỏ</option>   
                            <option value="yellow" >vàng</option>   
                        </select>    
                    </td></tr>
                    
                <tr><th><p>hình ảnh</p></th>
                    <td><input type="file" name="fileToUpload" id="fileToUpload" accept="image/*"></td></tr>
                    
                <tr><th><p>loại</p></th>
                    <td>
                    <select name="loai">
                            <?php
                                while($loai1=mysqli_fetch_assoc($ms)){
                                    ?>
                                        <option value="<?php echo  $loai1['MaNhom']?>" selected ><?php echo  $loai1['TenNhom']?></option>
                                    <?php
                                }
                            ?>

                        </select>

                    </td></tr>
                    
                <tr>
                    <th><p>mô tả</p></th>
                    <td><textarea value="" name="mota" id="" cols="100" rows="7">
                        <?php echo $row['MoTaHH']?>

                    </textarea></td></tr>   
                    
                <tr>
                    <th><p>thông số</p></th>
                    <td><textarea  name="thongso" id="" cols="100" rows="25" >
                       <?php echo $row['ThongSo']?>
                    
                    </textarea></td></tr>
                    
                
            </table>     
            <button type="submit" name="submit">them vao </button>
            </center>
            
        </form>
    </div>
</body>
</html>v