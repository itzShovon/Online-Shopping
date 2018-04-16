<?php
    session_start();
    $_SESSION['admin_name'] = "";
    $_SESSION['admin_password'] = "";
    $_SESSION['login_mode'] = "0";
    $_SESSION['login_flag'] = "0";
    $_SESSION['login_user'] = "0";
    $_SESSION['name'] = "";
//    session_destroy();
    header('Location: ../Default.php');
?>