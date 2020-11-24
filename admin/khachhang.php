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
        $sql = "SELECT * from khachhang";
        
        include '../sql/select.php';
    ?>
    <h1 class="tbname">KHÁCH HÀNG</h1>
    <table class="table_index">
        <tr>
            <th>MSKH</th>
            <th>họ tên </th>
            <th>username </th>
            <th>password</th>
            <th>địa chỉ</th>
            <th>số điện thoại </th>
            
        </tr>
        <?php
            while($row=mysqli_fetch_array($result) ){
                ?>
                
                <tr>
                    
                <td><a href="" class="choice_index"><?php echo $row['MSKH'] ?></td>
                <td><?php echo $row['HoTenKH'] ?></td>
                
                
                <td><?php echo $row['Username'] ?></td>
                
                <td><?php echo $row['Passwords'] ?></td>
            
                <td><?php echo $row['DiaChi'] ?></td>
                <td><?php echo $row['SoDienThoai'] ?></td>
                </tr>
                <?php
            }
        ?>
        

    </table>
</body>
</html>