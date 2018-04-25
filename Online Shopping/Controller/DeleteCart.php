<?php
    include ("config.php");
    try{
        session_start();
        $login_flag = $_SESSION['login_flag'];
        $login_mode = $_SESSION['login_mode'];
        $login_user = $_SESSION['login_user'];
        $product_id = htmlspecialchars($_GET["id"]);
        if($_SESSION['login_flag'] == 0)
            header('Location: ../Default.php');
        else if(($login_mode != 1) && ($login_flag == 1)){
            $sql = "DELETE FROM cart WHERE product_id = '$product_id'";

            $stmt = $db->prepare($sql);
            $stmt->bindValue(":product_id", $product_id);

            $stmt->execute();
            $res = $stmt->rowCount();
            echo "<script type='text/javascript'>alert('Succeeded');</script>";
            
            header('Location: ../Pages/Cart.php?b=0&id=0');
        }
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>