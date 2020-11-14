<?php 
    include '../php/session.php';
    $num =$_GET['mshh'] ;
    $i=0;
    // echo in_array($num,$_SESSION['products']);
    foreach($_SESSION['products'] as &$d){
        if($d==$num) {
            unset($_SESSION['products'][$i]);
            ?>
                <script>history.go(-1)</script>
            <?php
        }
    }
?>