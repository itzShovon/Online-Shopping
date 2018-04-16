<?php
    include ("config.php");
    try{
//        session_start();
        $brand = htmlspecialchars($_GET["b"]);
        $id = htmlspecialchars($_GET["id"]);
        $login_flag = $_SESSION['login_flag'];
        $login_user = $_SESSION['login_user'];
        
        
        if($id == '0'){
            if($brand == '0')
                $statement = $db->prepare("SELECT * FROM products WHERE true");
            else
                $statement = $db->prepare("SELECT * FROM products WHERE product_brand = '$brand'");
        }else{
            $statement = $db->prepare("SELECT * FROM products WHERE product_id = '$id'");
            
//            echo "<script type='text/javascript'>alert('holy crab...');</script>";
        }
        
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);

//        foreach($result as $row){
//            $comment_no = $row->comment_no;
//        }
//        $comment_no ++;
//
//        $temp = 1;
//
//        if($temp == 1){
//            $statement = $db->prepare("INSERT INTO comment_doctors 
//            (
//                doctor_no,
//                doctor_name,
//                doctor_password,
//                doctor_city,
//                doctor_region,
//                doctor_phone, 
//                doctor_email
//            )
//            VALUES (?,?,?,?,?,?,?)");
//            $statement->execute(array(
//                $login_user,
//                $user_name,
//                $user_password,
//                $user_city,
//                $user_region,
//                $user_phone,
//                $user_email
//            ));

//        $message = "Thanks! Operaion successfully.";
//        echo "<script type='text/javascript'>alert('$message');</script>";
//        }
        
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>