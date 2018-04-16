<?php
    include ("config.php");
    if($_SESSION['login_flag'] == '1'){
        $statement = $db->prepare('SELECT * FROM products WHERE true');
        $statement->execute();
        $result1 = $statement->fetchAll(PDO::FETCH_OBJ);

        $statement = $db->prepare("SELECT product_id FROM cart WHERE true");
        $statement->execute();
        $result2 = $statement->fetchAll(PDO::FETCH_OBJ);
    }
    else
        header('Location: SignOut.php');
?>