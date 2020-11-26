<?php 
    //hh=1 xóa chitietdathang 
    //hh=2 xóa hóa đơn khi chitietdathang ko có giá trị 
     //hh=3 xoa khách hàng khi không có hóa đơn 
    include '../php/session.php';
    if(isset($_GET['mshh'])){
        $num =$_GET['mshh'] ;
    }
    if(isset($_GET['pid'])){
        $pid = $_GET['pid'];
        }
    
    if(isset($_GET['hh'])){
        if($_GET['hh']==1){
           
            $sql="delete from chitietdathang where mshh=$num and SoDonDH=$pid";
            include '../sql/select.php';
            ?>
            <script>history.go(-1)</script>
            <?php
        }
        else if($_GET['hh']==2){
            
                $sql="select * from chitietdathang where SoDonDH=$pid";
                include '../sql/select.php';
                echo $result->num_rows;
                if ($result->num_rows==0){
                    $sql="delete from dathang where SoDonDH=$pid";
                    include '../sql/select.php';
                    ?>
                    <script>
                    alert("thành công");
                    history.go(-1);
                    
                    </script>
                <?php
                }
                else {
                    ?>
                    <script>
                        alert("không thể xóa do còn hàng trong đơn");
                        history.go(-1);
                    </script>
                <?php
                }
        }
        else if($_GET['hh']==3){
           
                    $sql="select * from dathang where MSKH=$pid";
                    include '../sql/select.php';
                    if($result->num_rows==0){
                        $sql="delete from khachhang where MSKH=$pid";
                        include '../sql/select.php';
                        ?>
                        <script>
                        alert("thành công");
                        history.go(-1);
                        
                        </script>
                        <?php
                    }
                    else {
                        ?>
                        <script>
                        alert("không thể xóa do còn đơn hàng thuộc người dùng đặt");
                        history.go(-1);
                        
                        </script>
                        <?php
                    }
                    
                
        }
        else if($_GET['hh']==2){
            
            $sql="select * from chitietdathang where SoDonDH=$pid";
            include '../sql/select.php';
            echo $result->num_rows;
            if ($result->num_rows==0){
                $sql="delete from dathang where SoDonDH=$pid";
                include '../sql/select.php';
                ?>
                <script>
                alert("thành công");
                history.go(-1);
                
                </script>
            <?php
            }
            else {
                ?>
                <script>
                    alert("không thể xóa do còn hàng trong đơn");
                    history.go(-1);
                </script>
            <?php
            }
    }
    else if($_GET['hh']==4){
       
                $sql="select * from dathang where MSNV=$pid";
                include '../sql/select.php';
                if($result->num_rows==0){
                    $sql="delete from nhanvien where MSNV=$pid";
                    include '../sql/select.php';
                    ?>
                    <script>
                    alert("thành công xoa nhan vien");
                    history.go(-1);
                    
                    </script>
                    <?php
                }
                else {
                    ?>
                    <script>
                    alert("không thể xóa do nhân viên đang giao hàng ");
                    history.go(-1);
                    
                    </script>
                    <?php
                }
                
            
    }
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