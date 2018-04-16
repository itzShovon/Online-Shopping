<?php
    include("../Controller/AdminUpConnect.php");
?>

<!DOCTYPE html>
<html>

<head>
<!--    <link rel="stylesheet" type="text/css" href="Data/CSS/Sign_Style.css">-->
<!--    <link rel="stylesheet" type="text/css" href="Data/CSS/Style.css">-->
</head>

<body>
    <div class="Middle" id="Middle">
        <div class="middle">
            <form name="admin_update" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th>Password</th>
                        <td><input class="admin_password" id="admin_password" name="admin_password" type="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <th>Conform Password</th>
                        <td><input class="temp_password" id="temp_password" name="temp_password" type="password" placeholder="Conform Password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" name="update" onclick="return RegisterValidation();">Update</button></td>
<!--                        <td><button type="reset">Reset</button></td>-->
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>