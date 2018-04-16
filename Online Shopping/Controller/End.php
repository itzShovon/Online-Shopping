<?php
    include ("config.php");
    try{
        session_start();
        $login_flag = $_SESSION['login_flag'];
        $login_mode = $_SESSION['login_mode'];
        $login_user = $_SESSION['login_user'];
        if($_SESSION['login_flag'] == 0)
            header('Location: ../Default.php');
        else if(($login_mode != 1) && ($login_flag == 1)){
            $sql = "DELETE FROM cart WHERE true";

            $stmt = $db->prepare($sql);
            $stmt->bindValue(":login_user", $login_user);

            $stmt->execute();
            $res = $stmt->rowCount();
            echo "<script type='text/javascript'>alert('Succeeded');</script>";
            
            header('Location: ../Pages/Products.php?b=0&id=0');
        }
        echo "<script type='text/javascript'>alert('Something wrong...');</script>";
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>