<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dơn hàng</title>
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include "./session.php";
        include './searchbar.php';
        $sql = "SELECT dathang.SoDonDH,khachhang.HoTenKH,khachhang.DiaChi,
        khachhang.SoDienThoai,dathang.TrangThai,dathang.NgayDH,khachhang.MSKH from dathang INNER JOIN 
        khachhang on dathang.MSKH = khachhang.MSKH  order by dathang.NgayDH desc";
        include '../sql/select.php';
    ?>
    <h1 class="tbname">ĐƠN HÀNG</h1>
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
            $stt =1;
            while($row=mysqli_fetch_array($result) ){
                $stt++;
                
                ?>
                
                <tr>
                    
                <td><a class="chitiet" href="./dadathang.php?sodon=<?php echo $row['SoDonDH']?>" class="choice_index" name="status<?php echo $stt ?>"><?php echo $row['SoDonDH'] ?></a>
                    <a class="xoa" href="../functions/deletecart.php?&hh=2&pid=<?php echo $row['SoDonDH']?>">  xóa</a>
                </td>
                <td><?php echo $row['HoTenKH'] ?></td>
                <td><?php echo $row['NgayDH'] ?></td>
                <td><?php echo $row['SoDienThoai'] ?></td>
                <td>
                <select class="status" name="status<?php echo $stt ?>" onchange="changes(this)">
                    <option value="wait" <?php if($row['TrangThai'] =="wait" ) {echo "selected";} ?>>chờ xác nhận</option>
                    <option value="shipping" <?php if($row['TrangThai'] =="shipping" ) {echo "selected";} ?>>đang giao</option>
                    <option value="delivered" <?php if($row['TrangThai'] =="delivered" ) {echo "selected";} ?>>đã giao</option>
                    
                </select>
                </td>
                <td><?php echo $row['DiaChi'] ?></td>
                
                </tr>
                <?php
            }
        ?>
        

    </table>
    <script>
        // var selects = document.getElementsByName("status");
        // selects.onchange()
        // console.log(selects);
        function changes(selects) {
            var TrangThai = selects.value;
            var sodon = document.getElementsByName(selects.name);
            var sodons = sodon[0].innerHTML;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange=function() {
                if (this.readyState ==4 && this.status ==200){
                    alert(this.responseText);
                }
            }
            xhttp.open("GET",'../functions/functionadmin.php?sodon=' + sodons +'&trangthai='+TrangThai,true);
            xhttp.send();
        }

    </script>
</body>
</html>