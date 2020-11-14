<?php 
    session_start();
    $url = $_SERVER['PHP_SELF'];
    if(!isset($_SESSION['MSKH'])){
        $_SESSION['MSKH']="-1";
    }
    if(!isset($_SESSION['products'])){
        $_SESSION['products'] = array(); 
    }
    if(isset($_SESSION['MSKH']) && $_SESSION['MSKH'] != "-1") {
        ?>
            <script>document.title= "<?php echo $_SESSION['HoTenKH'] ?>";
            </script>
        <?php
        if($url == "/dienthoaionline/php/sign.php"){
            header("location:./cvkh.php");
        }
    }
    else 
    {   
        if($url == "/dienthoaionline/php/cvkh.php" ){
            header("location:./index.php");
        }
        if($url == "/dienthoaionline/php/cart.php" ){
            header("location:./sign.php");
        }
        if($url == "/dienthoaionline/functions/dathang.php" ){
            header("location:./sign.php");
        }
    }
?>