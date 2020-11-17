<?php
    include '../php/session.php';
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    #get date 
    $day =date("y-m-d G:i:s" );
    $mskh = $_SESSION['MSKH'];
    $sql="insert into  dathang(MSKH,NgayDH,TrangThai) values($mskh,'$day','wait') ";
    include '../sql/select.php' ;

    $sql = "select SoDonDH from dathang where ngayDH='$day' and MSKH= $mskh";
    include '../sql/select.php';
    $row= mysqli_fetch_assoc($result);
    #lay id cua don hang 
    $idcart = $row['SoDonDH'];
    #insert hang trong gio vao chitiethd
    foreach($_SESSION['products'] as $p) {
        $sql = "select Gia from HangHoa where MSHH='$p'";
        include '../sql/select.php';
        $row= mysqli_fetch_assoc($result);
        $gia = $row['Gia'];
        $sql = "insert into chitietdathang values($idcart,$p,1,$gia)";
        include '../sql/select.php';
    }
    #xoa cac san pham trong cart 
    unset($_SESSION['products']);
    ?>
    <script>
        alert("thành công đặt hàng ");
        location.href("");
    </script>
