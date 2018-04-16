<?php
    include("../Controller/AdminInConnect.php");
?>

<!DOCTYPE html>
<html>

<head>
<!--    <link rel="stylesheet" type="text/css" href="Data/CSS/Style.css">-->
    
</head>

<body>
    <div class="Middle" id="Middle">
        <div class="middle">
            <form name="signin" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th>Name</th>
                        <td><input class="admin_name" id="admin_name" name="admin_name" type="text" placeholder="Name" autofocus></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input class="admin_password" id="admin_password" name="admin_password" type="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" name="admin_login" onclick="return RegisterValidation();">Sign In</button></td>
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