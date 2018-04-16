<?php
    include ("config.php");
    session_start();
    if($_SESSION['login_flag'] == 1){
        $product_id = htmlspecialchars($_GET["id"]);
        $statement = $db->prepare("INSERT INTO cart(
            product_id
        )
        VALUES (?)");
        $statement->execute(array(
            $product_id
        ));
        header('Location: ../Pages/Products.php?b=0&id=0');
    }
?>