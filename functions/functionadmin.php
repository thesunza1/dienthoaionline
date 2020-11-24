<?php
    include '../admin/session.php';

    if(isset($_GET['sodon']) && isset($_GET['trangthai'])){
        $sodon = $_GET['sodon'];
        $trangthai=$_GET['trangthai'];
        $sql = "update dathang set TrangThai='$trangthai' where SoDonDH='$sodon'";
        include "../sql/select.php";
        echo "thanh cong";
    }

?>