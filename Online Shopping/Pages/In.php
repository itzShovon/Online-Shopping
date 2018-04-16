<?php
    include '../Controller/InConnect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Data/CSS/Style.css">
</head>

<body>
    <div class="Middle" id="Middle">
        <div class="middle">
            <form name="signin_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th>User Name</th>
                        <td><input class="user_name" id="user_name" name="user_name" type="text" placeholder="User Name" autofocus></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input class="user_password" id="user_password" name="user_password" type="password" placeholder="User Password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" name="signin">SignIn</button></td>
<!--                        <td><button type="reset">Reset</button></td>-->
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="Footer" id="Footer"></div>
</body>

</html>