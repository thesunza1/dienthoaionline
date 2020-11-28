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
    ?>
    <div class="tshanghoa">
    <!-- ../functions/deletecart.php?hh=5 -->
        <form action="../functions/deletecart.php?hh=5" method="post"  enctype="multipart/form-data">
        <center>    
        <h1>thêm hàng hóa  </h1>
            <table>
                <tr><th><p>tên :</p></th>
                    <td><input type="text" autocomplete="on" name="namephone" pattern="{1,16}" required></td></tr>
                    
                <tr><th><p>giá  :</p></th>
                    <td><input type="number"  autocomplete="on" name="gia" pattern="[0-9]{7,16}" required></td></tr>    
                    
                <tr><th><p>số lượng :</p></th>
                    <td><input type="number"  autocomplete="on" name="soluong" pattern="[0-9]{1,16}" required></td></tr>
                    
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
                                while($row=mysqli_fetch_assoc($result)){
                                    ?>
                                        <option value="<?php echo  $row['MaNhom']?>" selected ><?php echo  $row['TenNhom']?></option>
                                    <?php
                                }
                            ?>

                        </select>

                    </td></tr>
                    
                <tr>
                    <th><p>mô tả</p></th>
                    <td><textarea value="" name="mota" id="" cols="100" rows="7">
                    Điện thoại Oppo A53 chính hãng mới được phân phối chính thức bởi 
                    Oppo Việt Nam. Oppo A53 chính hãng nổi bật với pin Li-Po 5000mAh kèm sạc
                    nhanh 18W, vi xử lý Snapdragon 460 cùng màn hình đục lỗ thời thượng IPS 6.5 inch,
                    HD+. Máy sở hữu cụm 3 camera sau 16MP, 2MP, 2MP cùng bảo mật vân tay mặt lưng. Bộ 
                    phụ kiện Oppo A53 chính hãng chuẩn gồm: sạc, 
                    cable, tai nghe cao cấp, ốp lưng, sách hướng dẫn sử dụng.

                    </textarea></td></tr>   
                    
                <tr>
                    <th><p>thông số</p></th>
                    <td><textarea  name="thongso" id="" cols="100" rows="25" >
                    
                    <table class="attributes">
                    <tr>
                    <th>Băng tần - Sim</th>
                    <td><p><a href="#" rel="tag">Dual SIM (Nano-SIM, dual stand-by)</a>, <a href="#" rel="tag">GSM / HSPA / LTE</a></p>
                </td>
                </tr>
                    <tr>
                <th>CPU</th>
                <td><p><a href="#" rel="tag">	Snapdragon 460  (12nm)</a></p>
                </td>
                </tr>
                <tr>
                <th>Tốc độ CPU</th>
                <td><p><a href="#" rel="tag">Octa-core (4×2.35 GHz Cortex-A53  4×1.8 GHz Cortex-A53)</a></p>
                </td>
                </tr>
                 <tr>
                 <th>Chip đồ họa ( GPU )</th>
                <td><p><a href="#" rel="tag">	Adreno 610</a></p>
                </td>
                </tr>
                <tr>
                <th>Hệ điều hành</th>
                <td><p><a href="#" rel="tag">Android 9.0 (Pie); ColorOS 6.1</a></p>
                </td>
                </tr>
                <tr>
                <th>Màn hình</th>
                <td><p><a href="#" rel="tag">6.5 inch</a>, <a href="#" rel="tag">720 x 1520 pixel</a>, <a href="#" rel="tag">IPS</a></p>
                </td>
                </tr>
                <tr>
                <th>Camera sau</th>
                <td><p><a href="#" rel="tag">Chính 13MP ; Phụ 2MP</a></p>
                </td>
                </tr>
                <tr>
                <th>Camera trước</th>
                <td><p><a href="#" rel="tag">5MP</a></p></td>
                </tr>
                <tr>
                <th>Bộ nhớ trong</th>
                <td><p><a href="#" rel="tag">64GB</a></p>
                </td>
                </tr>
                <tr>
                th>RAM</th>
                <td><p><a href="#" rel="tag">4GB</a></p>
                </td>
                </tr>
                <tr>
                <th>Pin</th>
                <td><p><a href="#" rel="tag">Li-Ion 5000mAh</a></p>
                </td>
                </tr>
                <tr>
                <th>Cảm biến</th>
                <td><p><a href="#" rel="tag">Fingerprint (side-mounted), accelerometer, proximity, compass</a></p>
                </td>
                </tr>
                <tr>
                <th>Màu sắc</th>
                <td><p><a href="#" rel="tag">Đen</a>, <a href="#" rel="tag">xanh</a></p>
                </td>
                </tr>
                </table>
                    
                    
                    </textarea></td></tr>
                    
                
            </table>     
            <button type="submit" name="submit">them vao </button>
            </center>
            
        </form>
    </div>
</body>
</html>