<?php 
        //hh=1 chinh sửa thông tin admin
        //hh=2 chỉnh sửa thông tin khách hàng 
        //hh=3 chỉnh sửa thông tin nhân viên
        
        include './session.php';
        if($_GET['hh']==1){
            $usernames=$_POST['uname'];
            $password = $_POST['pass'];
            $npass = $_POST['npass'];
            $HoTen = $_POST['u_name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $msnv = $_GET['pid'];
            $sql =  "select * from nhanvien where Username ='$usernames'";
            include '../sql/select.php';
        
            if($result->num_rows==1 || $result->num_rows==0){
            
            $sql =  "select * from nhanvien where   Passwords='$password' and ChucVu='admin'";
            
            include '../sql/select.php';
            
                if($result->num_rows==1){
                $sql = "update nhanvien set Username='$usernames',Passwords='$npass',HoTenNV='$HoTen',DiaChi='$address',SoDienThoai='$phone' where ChucVu='admin'" ;
                echo $sql;
                include '../sql/select.php';
                ?>
                <script>
                    window.location.href= "./cvkh.php";
                </script>
                <?php
                }
                else {
            
                ?>
                <script>
                    alert("password sai");
                setTimeout(() => {
                    window.location.href= "./cvkh.php";
                }, 2000);
                </script>
                <?php
                }
            

           
            }
            else {
                echo "username đã tồn tại ";
                echo $result->rows_num;
                ?>
                <script>
                setTimeout(() => {
                window.location.href= "./cvkh.php";
                }, 2000);
                </script>
                <?php
            }
        }
        else if($_GET['hh']==2){
            $usernames=$_POST['uname'];
            $password = $_POST['pass'];
            $npass = $_POST['npass'];
            $HoTen = $_POST['u_name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $MSKH= $_GET['pid'];
            
            $sql =  "select * from KhachHang where Username ='$usernames'";
            include '../sql/select.php';
            echo $result->num_rows;
            if($result->num_rows==1 || $result->num_rows==0){
                $sql =  "select * from KhachHang where MSKH=$MSKH and Passwords='$password'";
                include '../sql/select.php';
                if($result->num_rows==1){
                    $sql = "update KhachHang set Username='$usernames',Passwords='$npass',HoTenKH='$HoTen',DiaChi='$address',SoDienThoai='$phone' where MSKH=$MSKH" ;
                    include '../sql/select.php';
                    ?>
                    <script>
                   
                    window.location.href= "./cv.php?hh=1&pid=<?php echo $MSKH ?>";
                    </script>
                    <?php
                }
                else {
                    
                    ?>
                    <script>
                    alert("password sai");
                    setTimeout(() => {
                        window.location.href= "./cv.php?hh=1&pid=<?php echo $MSKH ?>";
                    }, 2000);
                    </script>
                    <?php
                }
                
    
               
                }
                else {
                echo "username đã tồn tại ";
                echo $result->rows_num;
                ?>
                <script>
                    setTimeout(() => {
                        window.location.href= "./cv.php?hh=1&pid=<?php echo $MSKH ?>";
                    }, 2000);
                </script>
                <?php
                }
        }
        else if($_GET['hh']==3){
            $usernames=$_POST['uname'];
            $password = $_POST['pass'];
            $npass = $_POST['npass'];
            $HoTen = $_POST['u_name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $MSNV= $_GET['pid'];
            
            $sql =  "select * from nhanvien where Username ='$usernames'";
            include '../sql/select.php';
            echo $result->num_rows;
            if($result->num_rows==1){
                $sql =  "select * from nhanvien where MSNV=$MSNV and Passwords='$password'";
                include '../sql/select.php';
                if($result->num_rows==1){
                    $sql = "update KhachHang set Username='$usernames',Passwords='$npass',HoTenKH='$HoTen',DiaChi='$address',SoDienThoai='$phone' where MSKH=$MSKH" ;
                    include '../sql/select.php';
                    ?>
                    <script>
                   
                    window.location.href= "./cv.php?hh=2&pid=<?php echo $MSNV ?>";
                    </script>
                    <?php
                }
                else {
                    
                    ?>
                    <script>
                    alert("password sai");
                    setTimeout(() => {
                        window.location.href= "./cv.php?hh=2&pid=<?php echo $MSNV ?>";
                    }, 2000);
                    </script>
                    <?php
                }
                
    
               
                }
                else {
                echo "username đã tồn tại ";
                echo $result->rows_num;
                ?>
                <script>
                    setTimeout(() => {
                        window.location.href= "./cv.php?hh=2&pid=<?php echo $MSNV ?>";
                    }, 2000);
                </script>
                <?php
                }
        }
        
       
?>
