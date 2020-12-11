
    <div id="menu">
        <?php
                $sql ="select * from NhomHangHoa limit 6";
                include '../sql/select.php';
                while ( $row = mysqli_fetch_assoc($result) )
                {
                    ?>
                    <a title="<?php echo $row['TenNhom']?>" href="./resultsearch.php?txtsearch=<?php echo $row['TenNhom']?>" class="hang">
                    <img src="<?php echo $row['Hinh']?>" alt="">
                    </a>

        <?php
                }

        ?>
    </div>
