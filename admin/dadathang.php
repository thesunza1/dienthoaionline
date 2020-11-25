<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
<?php
        include "./session.php";
        include "./searchbar.php";
        

        ?>
        <div id="allcart">
        <div class= "header">
            <table>
                <tr>
                    <td id="tsp">sản phẩm</td>
                    <td>đơn giá</td>
                    <td>số lượng</td>
                    <td>thao tác</td>
                </tr>
            </table>
        </div>
        <?php
            $sodon = $_GET['sodon'];
            
            // lay sodondh va trangthai don hang 
            
                $sql ="select hanghoa.* from hanghoa inner JOIN chitietdathang on hanghoa.MSHH=chitietdathang.MSHH where chitietdathang.SoDonDH= $sodon";
                include '../sql/select.php';
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="displaysp">
                    <table>
                        <tr>
                            <td class="tsp">
                               <table>
                                   <tr>
                                    <td class="imgcart"><img src="<?php echo $row['Hinh'] ?>" alt="">
                                            <h3><?php echo $row['TenHH'] ?> </h3>
                                   </tr>
                                        </td>
                               </table> 
       
                            </td>
                            <td><?php echo $row['Gia'] ?> VNĐ</td>
                            <td>
                                <p class="sl">1</p>
                            </td>
                            
                            <td><a id="delete" href="../functions/deletecart.php?mshh=<?php echo $row['MSHH']?>&hh=1&pid=<?php echo $sodon?>">delete </a></td>
                        </tr>
                    </table>
                </div>
                        <?php
                }
            
            
                ?>
     
        
    </div>

    

    <script>
        
    </script>
</body>
</html>