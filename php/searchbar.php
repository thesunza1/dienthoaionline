
    <div id="searchbar">
        <div id="logo"><a href="./index.php">dienthoaionline</a></div>
        <form id="frsearch" action="./resultsearch.php" method="GET">
            <div id="searchbox">
                <input type="text" name='txtsearch' placeholder="type to search...." maxlenght="15">
                <!-- <a  type="submit">
                    search 
                </a> -->
                <button type ="submit">search</button>
            </div>
        </form>
        <div id="cart">
            <a <?php 
                if ($_SESSION['MSKH']=="-1") {
                    echo 'style="visibility: hidden;"';
                }
            ?>  href="./dadathang.php"> 
            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
            </a>    
            <a href="./cart.php"> 
            <p ><?php 
                $counts =  count($_SESSION['products']); 
                echo $counts;
            ?></p>
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
            <a href="./sign.php" > 
           <i <?php 
                if ($_SESSION['MSKH']!="-1") {
                    echo 'style="color: red ;"';
                }
            ?> class="fa fa-user" aria-hidden="true"></i>
            </a>
            <a <?php 
                if ($_SESSION['MSKH']=="-1") {
                    echo 'style="visibility: hidden;"';
                }
            ?>  href="./logout.php"> 
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>    
           
        </div>
        
    </div>

    