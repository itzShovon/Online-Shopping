<?php
    include('../Controller/AddProductConnect.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Product...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="../Data/CSS/Style.css">
    <link rel="stylesheet" type="text/css" href="../Data/CSS/ProductStyle.css">
    <link rel="stylesheet" type="text/css" href="../Data/CSS/HeaderStyle.css">
    <script src="Data/JQ/jquery.min.js"></script>
    <script src="Data/JQ/Sign.min.js"></script>
</head>

<body>
    <div class="Header" id="Header">
        <?php include 'Header.php'; ?>
    </div>
    <div class="Middle" id="Middle">
        <div class="update_account" id="update_account">
            <form name="update_account_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th>Product's Picture</th>
                        <td><input class="product_picture" id="product_picture" name="product_picture" type="file" accept="image/*"></td>
                    </tr>
                    <tr>
                        <th>Product's Name</th>
                        <td><input class="product_name" id="product_name" name="product_name" type="text" placeholder="Product's Name" autofocus></td>
                    </tr>
                    <tr>
                        <th>Product's ID</th>
                        <td><input class="product_id" id="product_id" name="product_id" type="text" placeholder="Product's ID"></td>
                    </tr>
                    <tr>
                        <th>Product's Brand</th>
                        <td><input class="product_brand" id="product_brand" name="product_brand" type="text" placeholder="Product's Brand"></td>
                    </tr>
                    <tr>
                        <th>Product's Description</th>
                        <td><input class="product_description" id="product_description" name="product_description" type="text" placeholder="Description"></td>
                    </tr>
                    <tr>
                        <th>Product's Old Price</th>
                        <td><input class="product_old_price" id="product_old_price" name="product_old_price" type="text" placeholder="Product's Old Price"></td>
                    </tr>
                    <tr>
                        <th>Product's Price</th>
                        <td><input class="product_price" id="product_price" name="product_price" type="text" placeholder="Product's Price"></td>
                    </tr>
                    <tr>
                        <th>Product's Quantity</th>
                        <td><input class="product_quantity" id="product_quantity" name="product_quantity" type="text" placeholder="Product's Quantity" ></td>
                    </tr>
<!--
                    <tr>
                        <td><button type="reset">Reset</button></td>
                        <td><button type="submit" name="update_account" onclick="return RegisterValidation();">Update</button></td>
                    </tr>
-->
                </table>
                <button type="submit" name="add_product" onclick="return RegisterValidation();">Update</button>
                <button type="reset">Reset</button>
            </form>
        </div>
        
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>