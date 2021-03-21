<?php 
    //hh=1 xóa chitietdathang 
    //hh=2 xóa hóa đơn khi chitietdathang ko có giá trị 
     //hh=3 xoa khách hàng khi không có hóa đơn 
     //hh=4 xóa nhân viên
     //hh=5 thêm hàng hóa
     //hh=6 sửa hàng hóa 
     //hh=7 xóa hàng hóa khi không có hàng trong chi tiết đặt hàng 

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
                //echo $result->num_rows;
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
            //echo $result->num_rows;
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
            else if($_GET['hh']==5){
                $hinh = $_FILES["fileToUpload"]["name"];
                $namephone = $_POST['namephone'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $mau = $_POST['mau'];
                $loai = $_POST['loai'];
                $mota = $_POST['mota'];
                $thongso = $_POST['thongso'];
                
                //echo $hinh;
                $target_dir = "../img/vsmart";
                $target_file = $target_dir . basename($hinh);
               
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $sql = "INSERT INTO `hanghoa`(`TenHH`, `Mau`, `Gia`, `SoLuongHang`, `MaNhom`, `Hinh`, `MoTaHH`, `ThongSo`) 
                    VALUES ('$namephone','$mau',$gia,$soluong,$loai,'$target_file','$mota','$thongso')";
                
                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    
                    $uploadOk = 1;
                } else {
                    ?>
                    <script>
                    
                    alert("đây không phải là hình");
                    history.go(-1);
                    </script>

                    <?php
                    $uploadOk = 0;
                }
                // Check if file already exists
                if (file_exists($target_file)) {

                    ?>
                    <script>
                    
                    // alert("ảnh đã tồn tại.vui lòng đổi tên ảnh ");
                    // history.go(-1);
                    </script>

                    <?php
                    $uploadOk = 1;
                }
  
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                   
                    ?>
                    <script>
                    
                    // alert("file quá lớn");
                    // history.go(-1);
                    </script>

                    <?php
                    $uploadOk = 1;
                }
  
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                   
                    ?>
                    <script>
                    
                    alert("chỉ JPG, JPEG, PNG & GIF  mới được chấp nhận.");
                    history.go(-1);
                    </script>

                    <?php
                    $uploadOk = 0;
                }
  
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                        ?>
                    <script>
                    
                    alert("lỗi upload file");
                    history.go(-1);
                    </script>

                    <?php
                // if everything is ok, try to upload file
                } 
                else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        include '../sql/select.php';
                        ?>
                        <script>
                            alert("thành công ");
                            history.go(-1);
                        </script>

                        <?php
                        
                    } 
                    else {
                        
                        ?>
                        <script>
                    
                    alert("có lỗi khi up file");
                    history.go(-1);
                    </script>

                    <?php
                        }
                    }
                }

            }
            else if($_GET['hh']==6){
                $hinh = $_FILES["fileToUpload"]["name"];
                $namephone = $_POST['namephone'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $mau = $_POST['mau'];
                $loai = $_POST['loai'];
                $mota = $_POST['mota'];
                $thongso = $_POST['thongso'];

                
                //echo $hinh;
                $target_dir = "../img/vsmart/";
                $target_file = $target_dir . basename($hinh);
               
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $sql = "UPDATE `hanghoa` SET `TenHH`='$namephone',
                `Mau`='$mau',`Gia`=$gia,`SoLuongHang`=$soluong,`MaNhom`=$loai,
                `Hinh`='$target_file',`MoTaHH`='$mota',`ThongSo`='$thongso' WHERE MSHH=$pid";
                //echo $sql;
                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    
                    $uploadOk = 1;
                } else {
                    ?>
                    <script>
                    
                    alert("đây không phải là hình");
                    history.go(-1);
                    </script>

                    <?php
                    $uploadOk = 0;
                }
                // Check if file already exists
                if (file_exists($target_file)) {

                    ?>
                    <script>
                    
                    // alert("ảnh đã tồn tại.vui lòng đổi tên ảnh ");
                    // history.go(-1);
                    </script>

                    <?php
                    $uploadOk = 1;
                }
  
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                   
                    ?>
                    <script>
                    
                    // alert("file quá lớn");
                    // history.go(-1);
                    </script>

                    <?php
                    $uploadOk = 1;
                }
  
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                   
                    ?>
                    <script>
                    
                    alert("chỉ JPG, JPEG, PNG & GIF  mới được chấp nhận.");
                    history.go(-1);
                    </script>

                    <?php
                    $uploadOk = 0;
                }
  
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                        ?>
                    <script>
                    
                    alert("lỗi upload file");
                    history.go(-1);
                    </script>

                    <?php
                // if everything is ok, try to upload file
                } 
                else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        include '../sql/select.php';
                        ?>
                        <script>
                            alert("thành công ");
                            // document.href= "/admin/suahanghoa.php?pid=<?php //echo $pid?>";
                            history.go(-1);
                        </script>

                        <?php
                        
                    } 
                    else {
                        
                        ?>
                        <script>
                    
                    alert("có lỗi khi up file");
                    history.go(-1);
                    </script>

                    <?php
                        }
                    }
                }

            }
            else if($_GET['hh']==7){
            
                $sql="select * from chitietdathang where MSHH=$pid";
                include '../sql/select.php';
                //echo $result->num_rows;
                if ($result->num_rows==0){
                    $sql="delete from hanghoa where MSHH=$pid";
                    include '../sql/select.php';
                    ?>
                    <script>
                    alert("xóa thành công thành công");
                    history.go(-1);
                    
                    </script>
                <?php
                }
                else {
                    ?>
                    <script>
                        alert("không thể xóa do có người đang đặt ");
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