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
        include "./session.php";
        include './searchbar.php';
        $sql = "SELECT dathang.SoDonDH,khachhang.HoTenKH,khachhang.DiaChi,
        khachhang.SoDienThoai,dathang.TrangThai,dathang.NgayDH from dathang INNER JOIN 
        khachhang on dathang.MSKH = khachhang.MSKH  order by dathang.NgayDH desc";
        include '../sql/select.php';
    ?>
    <table class="table_index">
        <tr>
            <th>số đơn</th>
            <th>người đặt</th>
            <th>ngày đặt</th>
            <th>số dt</th>
            <th>trạng thái</th>
            <th>địa chỉ</th>
        </tr>
        <?php
            while($row=mysqli_fetch_array($result) ){
                ?>
                <tr>
                <th><?php echo $row['SoDonDH'] ?></th>
                <th><?php echo $row['HoTenKH'] ?></th>
                <th><?php echo $row['NgayDH'] ?></th>
                <th><?php echo $row['TrangThai'] ?></th>
                <th><?php echo $row['SoDienThoai'] ?></th>
                <th><?php echo $row['DiaChi'] ?></th>
                
                </tr>
                <?php
            }
        ?>

    </table>
</body>
</html>