<div id="info">
    <!-- <div> 
        <p>SẢN PHẨM : </p>
    </div> -->
    <?php
        if(isset($_GET['txtsearch']))   {
            $p= $_GET['txtsearch'];
            print("<p>SẢN PHẨM CHO TÌM KIẾM  :<p style='color: red; font-size: 25px';display : inline-block; padding: 0px   > $p</p> </p>");

        }
        include "./cards.php";
    ?>
</div>