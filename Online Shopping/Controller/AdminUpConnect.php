<?php
    try{
        include ("config.php");
        
//        session_start();
        if(isset($_POST['update'])){
            
            if(empty($_POST['admin_password'])){
                $error_message = ("Give your Password to update");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['temp_password'])){
                $error_message = ("Rewrite Password to update");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(isset($_POST['temp_password']) && isset($_POST['admin_password'])){
                $temp_password = $_POST['temp_password'];
                $admin_password = $_POST['admin_password'];
                if($admin_password == $temp_password){
                    if(isset($_POST['admin_password']))
                        $admin_password = $_POST['admin_password'];
                
                    $sql = "UPDATE admin SET admin_password=?";
                    if(empty($admin_password)){
                        $_SESSION['admin_name'] = "";
                        $_SESSION['admin_password'] = "";
                    }
                    else{
                        $_SESSION['admin_password'] = $admin_password;
                        $db->prepare($sql)->execute([$admin_password]);

                        $error_message = ("Sucessfull...");
                        echo "<script type='text/javascript'>alert('$error_message');</script>";
                        header('Location: Admin.php');
                    }
                }
                else{
                    $error_message = ("Pasword didn't match...");
                    echo "<script type='text/javascript'>alert('$error_message');</script>";
                }
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
