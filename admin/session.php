<?php
    session_start();
    $url = $_SERVER['PHP_SELF'];
    if(isset($_SESSION['admin'])){
        if($url =="/dienthoaionline/admin/login.php") {
            header("location:./index.php");
        }
    }
    else{
        if($url =="/dienthoaionline/admin/index.php") {
            header("location:./login.php");
        }
        if($url =="/dienthoaionline/admin/cvkh.php") {
            header("location:./login.php");
        }
        if($url =="/dienthoaionline/admin/chinhsuacv.php") {
            header("location:./login.php");
        }
        if($url =="/dienthoaionline/admin/khachhang.php") {
            header("location:./login.php");
        }
        if($url =="/dienthoaionline/functions/functionadmin.php") {
            header("location:./login.php");
        }
        if($url =="/dienthoaionline/admin/dadathang.php") {
            header("location:./login.php");
        }
        if($url =="/dienthoaionline/admin/themhanghoa.php") {
            header("location:./login.php");
        }
        if($url =="/dienthoaionline/admin/cv.php") {
            header("location:./login.php");
        }
        if($url =="/dienthoaionline/functions/deletecart.php") {
            header("location:./login.php");
        }
        if($url =="/dienthoaionline/admin/hanghoa.php") {
            header("location:./login.php");
        }
    }
?>
