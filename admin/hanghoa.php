<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hàng hóa</title>
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include "./session.php";
        include './searchbar.php';
        $sql = "SELECT * from hanghoa";
        include '../sql/select.php';
    ?>
    <h1 class="tbname">ĐƠN HÀNG</h1>
    <a class="them" href="./themhanghoa.php">thêm hàng hóa</a>
    <table class="table_index">
        
        <tr>
            <th>MSHH</th>
            <th>tên điện thoại</th>
            <th>màu sắc</th>
            <th>giá</th>
            <th>số lượng</th>
            <th>hản điện thoại </th>
        </tr>
        <?php
            $stt =1;
            while($row=mysqli_fetch_array($result) ){
                $stt++;
                
                ?>
                
                <tr>
                    
                <td><a class="chitiet" href="./suahanghoa.php?pid=<?php echo $row['MSHH']?>" class="choice_index" name="status<?php echo $stt ?>"><?php echo $row['MSHH'] ?></a>
                    <a class="xoa" href="../functions/deletecart.php?&hh=7&pid=<?php echo $row['MSHH']?>">  xóa</a>
                </td>
                <td><?php echo $row['TenHH'] ?></td>
                <td><?php echo $row['Mau'] ?></td>
                <td><?php echo $row['Gia'] ?></td>
                <td><?php echo $row['SoLuongHang'] ?></td>
                <td>
                <?php echo $row['MaNhom'] ?>
                
                </td>
                
                
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