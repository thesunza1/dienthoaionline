<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel = "icon" href =  "../img/logo_title.jpg" type = "image/x-icon"> 
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include "./session.php";
        include "./searchbar.php";
        include "./menu.php";
        
        ?>
        <div id="allcart">
        <div class= "header">
            <table>
                <tr>
                    <td id="tsp">sản phẩm</td>
                    <td>đơn giá</td>
                    <td>số lượng</td>
                    <td>thành tiền</td>
                    <td>trạng thái</td>
                    <td>thao tác</td>
                    
                </tr>
            </table>
        </div>
        <?php
        $allgia=0;
        foreach($_SESSION['products'] as &$mshh){
            $sql = "select * from HangHoa where MSHH =$mshh";
            include "../sql/select.php";
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="displaysp">
            <table>
                <tr>
                    <td class="tsp">
                       <table>
                           <tr>
                            <td class="imgcart"><img src="<?php echo $row['Hinh'] ?>" alt="">
                                    <h3><?php echo $row['TenHH'] ?> </h3>
                                </td>
                           </tr>
                       </table> 

                    </td>
                    <td><?php echo $row['Gia'] ?> VNĐ</td>
                    <td>
                        <p class="sl">1</p>

                    </td>
                    <td><?php echo $row['Gia'] ?> VND</td>
                    <td><a id="delete" href="../functions/deletecart.php?mshh=<?php echo $row['MSHH']?>">delete </a></td>
                </tr>
            </table>
        </div>
            <?php
            $allgia += $row['Gia'];
        }
    ?>
     <div class= "header">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="line-height: 0px">tổng giá trị</td>
                    <td style="line-height: 0px "><h2><?php echo $allgia ?> VND</h2></td>
                </tr>
            </table>
        </div>
        <div id= "buy" onclick="dat()">
        buy
    </div>  
    </div>

    <?php 
         include './fooder.php';
    ?>

    <script>
        function dat() {
            location.href=  "../functions/dathang.php";
        }
    </script>
</body>
</html>