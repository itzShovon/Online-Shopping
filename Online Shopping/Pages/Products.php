<?php
    session_start();
    include '../Controller/ProductsConnect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>For users...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="../Data/CSS/Style.css">
    <link rel="stylesheet" type="text/css" href="../Data/CSS/ProductStyle.css">
    <link rel="stylesheet" type="text/css" href="../Data/CSS/HeaderStyle.css">
    <script src="../Data/JQ/jquery.min.js"></script>
    <script src="../Data/JQ/Sign.min.js"></script>
</head>

<body>
    <div class="Header" id="Header">
        <?php include('Header.php'); ?>
    </div>
    <div class="Middle" id="Middle">
        <div class="product">
            <div class="product_brand">
                <table>
                    <?php foreach($result1 as $row){ ?>
                        <tr><td><a href="Products.php?b=<?php echo $row->product_brand; ?>&id=0"><?php echo $row->product_brand; ?></a></td></tr>
                    <?php } ?>
<!--
                    <tr><td><a href="Products.php?b=August Burns Red">August Burns Red</a></td></tr>
                    <tr><td><a href="Products.php">Linkin Park</a></td></tr>
                    <tr><td><a href="Products.php">Bring Me The Horizon</a></td></tr>
                    <tr><td><a href="Products.php">Ice Tea</a></td></tr>
                    <tr><td><a href="Products.php">The Word Alive</a></td></tr>
                    <tr><td><a href="Products.php">Issues</a></td></tr>
-->
                </table>
            </div>
            <div class="product_details">
                <div class="view_products">
                    <?php if($id == '0'){ ?>
                        <?php foreach($result as $row){ ?>
                            <div class="item">
                                <img src="../Data/Images/Products/<?php echo $row->product_picture; ?>">
                                <h4><?php echo $row->product_brand; ?></h4>
                                <h4><?php echo $row->product_name; ?></h4>
                                <h4>Price: <del>$<?php echo $row->product_old_price; ?></del> $<?php echo $row->product_price; ?></h4>
                                <a href="Products.php?b=<?php echo $row->product_brand; ?>&id=<?php echo $row->product_id; ?>">Details</a>
                                <?php if($_SESSION['login_flag'] == 1){ ?>
                                    <a href="../Controller/AddToCart.php?id=<?php echo $row->product_id; ?>">Check Out</a>
                                    <?php if($_SESSION['login_mode'] == 1){ ?>
                                        <a href="../Controller/Delete.php?id=<?php echo $row->product_id; ?>">Delete</a>
                                        <a href="Products.php"><del>Update</del></a>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <?php if($id != '0'){ ?>
                    <?php foreach($result as $row){ ?>
                        <div class="view_product_detail">
                            <img src="../Data/Images/Products/<?php echo $row->product_picture; ?>">
                            <h4>Album: <?php echo $row->product_name; ?></h4>
                            <h4>Artist: <?php echo $row->product_brand; ?></h4>
                            <h4>Old Price: <del>6$</del></h4>
                            <h4>New Price: 4$</h4>
                            <h4>Details: <?php echo $row->product_description; ?></h4>
                            <h4>Quantity: <?php echo $row->product_quantity; ?></h4>
                            <h4>ID: <?php echo $row->product_id; ?></h4>
                            <?php if($_SESSION['login_flag'] == 1){ ?>
                                <a href="Products.php">Check Out</a>
                                <?php if($_SESSION['login_mode'] == 1){ ?>
                                    <a href="../Controller/Delete.php?id=<?php echo $row->product_id; ?>">Delete</a>
                                    <a href="Products.php"><del>Update</del></a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php'; ?>
    </div>
</body>

</html>