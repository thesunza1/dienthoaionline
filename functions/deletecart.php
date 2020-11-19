<?php 
    include '../php/session.php';
    $num =$_GET['mshh'] ;
    if(isset($_GET['hh'])){
        $sql="delete from chitietdathang where mshh=$num";
        include '../sql/select.php';
        ?>
        <script>history.go(-1)</script>
        <?php
    }
    else {
        
        $i=0;
        // echo in_array($num,$_SESSION['products']);
        foreach($_SESSION['products'] as &$d){
            $sl = count($_SESSION['products']);
            if($d==$num) {
                if($i==0 && $sl ==1){
                    unset($_SESSION['products']);
                    $_SESSION['products'] =array();
                }
                else{
                    unset($_SESSION['products'][$i]);
                }
                
                
                
                ?>
                    <script>history.go(-1)</script>
                <?php
            }
            $i++;
        }
    }
   

?>