<?php
    try{
        include ("config.php");
        
        if(isset($_POST['signin'])){
//            session_start();
            if(empty($_POST['user_name']) AND empty($_POST['user_password'])){
                $error_message = ("Give your ID/E-mail and your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_name'])){
                $error_message = ("Give your Name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_password'])){
                $error_message = ("Give your Password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else{
                $user_name = "";
                $user_password = "";
                
                if(isset($_POST['user_name']))
                    $user_name = $_POST['user_name'];
                if(isset($_POST['user_password']))
                    $user_password = $_POST['user_password'];
                
                
                $statement = $db->prepare("SELECT * FROM users WHERE user_name = '$user_name'");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_OBJ);
                
                
                
                if(empty($user_password)){
                    $_SESSION['user_name'] = "";
                    $_SESSION['user_password'] = "";
                }
                else{
                    $_SESSION['user_name'] = $user_name;
                    $_SESSION['user_password'] = $user_password;
                }
                
                
                if(empty($result))
                    echo "<script type='text/javascript'>alert('Non user... Try again...');</script>";
                else{
                    foreach($result as $row){
                        if(($user_password == $row->user_password) && ($user_name == $row->user_name)){
                            $_SESSION['login_flag'] = 1;
                            $_SESSION['login_user'] = $row->user_no;

                            header ('Location: Products.php?b=0&id=0');
                        }
                    }
                    echo "<script type='text/javascript'>alert('Non user... Try again...');</script>";
                }
                echo "<script type='text/javascript'>alert('Non user... Try again...');</script>";
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
