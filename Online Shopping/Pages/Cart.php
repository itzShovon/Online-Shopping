<?php
    session_start();
    include '../Controller/CartConnect.php';
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
<!--        <form name="signin_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">-->
        <div class="cart">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Cover</th>
                    <th>Album</th>
                    <th>Artist</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php foreach($result1 as $row){ ?>
                    <?php foreach($result2 as $row2){ ?>
                        <?php if($row->product_id == $row2->product_id){ ?>
                            <tr>
                                <td><?php echo $row->product_id; ?></td>
                                <td><img src="../Data/Images/Products/<?php echo $row->product_picture; ?>"></td>
                                <td><?php echo $row->product_name; ?></td>
                                <td><?php echo $row->product_brand; ?></td>
                                <td>$<?php echo $row->product_price; ?></td>
                                <td><a href="../Controller/DeleteCart.php?id=<?php echo $row->product_id; ?>">Remove</a></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </table>
<!--                <button type="submit" name="update">Update</button>-->
            <a href="../Controller/End.php">Buy Now</a>
        </div>
<!--        </form>-->
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php'; ?>
    </div>
</body>

</html>