<!DOCTYPE html>
<html>

<head>
    <title>Home Page...</title>
    <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="../Data/CSS/Home.css">
</head>

<body>
    <div class="BodyX">
        <div class="Body">
            <div class="Header"></div>
            <div class="Middle">
                <div class="middle_box">
                    <?php
                        session_start();
                        if($_SESSION['login_flag'] != 1){
                    ?>
                        <a href="Sign.php">Users</a>
                    <?php
                        }else{
                    ?>
                        <a href="../Controller/SignOut.php">Sign Out</a>
                    <?php
                        }
                    ?>
                    <a href="Products.php?b=0&id=0">Shop Now</a>
                    <h2>Welcome to...</h2>
                    <h4>Shovon's Online Shoping</h4>
                </div>
            </div>
            <div class="Footer">
                <?php include('Footer.php'); ?>
            </div>
        </div>
    </div>
</body>

</html>
