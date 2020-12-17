<?php
    session_start();
    $url = $_SERVER['PHP_SELF'];
    echo $url ;
    if($url =="/dienthoaionline/index.php") {
        header("location:./php/index.php");
    }
?>
