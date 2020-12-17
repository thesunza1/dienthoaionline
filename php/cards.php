<?php
    $sql =$info;
    include '../sql/select.php';
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
     <a href="./product.php?pid=<?php echo $row['MSHH']?>">
     <div title="<?php echo $row['TenHH'] ?>" class="card">
        <div class="imgs">
            <img src="<?php echo $row['Hinh'] ?>" alt="">
        </div>
        <div class="name"><?php 
            $name = $row['TenHH'];
            
            if(strlen($name)>16){
                $name = substr($name,0,16) . "...";
                
            }
            echo $name;
         ?></div>
        <div class="cost"><?php echo $row['Gia'] ?> vnd</div>
        
     </div>
     </a>
     <?php
    }
?>