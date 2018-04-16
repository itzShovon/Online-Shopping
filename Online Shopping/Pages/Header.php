<?php
//    session_start();
?>

<div class="header_body">
    <div class="header_body_left">
        <a href="Home.php" title="Home Page"><img src="../Data/Images/Header/store-icon.png"></a>
    </div>
    <div class="header_body_middle">
        <a href="Products.php?b=0&id=0" title="Products">Products</a>
        <?php
//            session_start();
            if($_SESSION['login_flag'] != 1){
        ?>
            <a href="Sign.php" title="Sign In/Up"><img src="../Data/Images/Header/Icon_10-512.png"></a>
            <?php $_SESSION['login_flag'] = 0;}else{ ?>
            <a href="../Controller/SignOut.php" title="Sign In/Up"><img src="../Data/Images/Header/Power.png"></a>
        <?php } ?>
    </div>
    <div class="header_body_right">
        <?php
//            session_start();
            if(($_SESSION['login_flag'] == 1) && ($_SESSION['login_mode'] != 1)){
        ?>
            <a href="Cart.php" title="Shoping Cart"><img src="../Data/Images/Products/shopping-cart-icon.png"></a>
<!--            <p class="cart_no">10</p>-->
        <?php }else if(($_SESSION['login_flag'] == 1) && ($_SESSION['login_mode'] == 1)){ ?>
            <a href="AddProduct.php" title="Add Product">Add Product</a>
        <?php } ?>
    </div>
</div>