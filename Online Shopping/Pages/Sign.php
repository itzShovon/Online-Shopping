<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>For users...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="../Data/CSS/Style.css">
    <link rel="stylesheet" type="text/css" href="../Data/CSS/SignStyle.css">
    <link rel="stylesheet" type="text/css" href="../Data/CSS/HeaderStyle.css">
    <script src="../Data/JQ/jquery.min.js"></script>
    <script src="../Data/JQ/Sign.min.js"></script>
</head>

<body>
    <div class="Header" id="Header">
        <?php include('Header.php') ?>
<!--        <a href="Home.php"><img src="Data/Images/Icon/Icon.png" alt="Home Page" height="42" width="42"></a>-->
    </div>
    <div class="Middle" id="Middle">
        <div class="middle_up" id="middle_up">
            <?php if($_SESSION['login_flag'] != 1){ ?>  
                <a class="middle_up_signin" id="middle_up_signin">Sign In</a>
            <?php }else{ ?>
                <a href="../Controller/SignOut.php" title="Sign In/Up">Sign Out</a>
            <?php } ?>
            <a class="middle_up_signup" id="middle_up_signup">Sign Up</a>
        </div>
        <div class="middle_body" id="middle_body">
            <div class="middle_body_signin" id="middle_body_signin">
                <?php include 'In.php' ?>
            </div>
            <div class="middle_body_signup" id="middle_body_signup">
                <?php include 'Up.php' ?>
            </div>
        </div>
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>