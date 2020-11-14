<?php 
    include '../php/session.php';
    $counts =  count($_SESSION['products']); 
    
    // foreach($_SESSION['products'] as &$d) {
    //     echo "la :".$d ; 
    // }
    if($counts <2) {
        if(in_array($_GET['mshh'],$_SESSION['products'])){
            
            ?>
            <script>alert("đã có sp này trong giỏ");
                history.go(-1);
            </script> 
            <?php
        }
        else {
            array_push($_SESSION['products'],$_GET['mshh']);
       
            ?>
            <script>
            history.go(-1);
            </script> 
            <?php
        }
   }
   else {  
       
       ?>
       <script>alert("chỉ cho phép tối đa 2 sản phẩm trong giỏ hàng.");
            history.go(-1);
        </script>
        <?php
   }
    

?>