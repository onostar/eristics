<?php
    session_start();
    require "server.php";

    function validate($field){
        if(!isset($_POST[$field])){
            return false;
        }else{
            return htmlspecialchars(stripslashes($_POST[$field]));
        }
    }
    $_SESSION['success'] = "";
    $_SESSION['error'] = "";
    if(isset($_POST['submit_login'])){
        $admin_email = strtolower(validate('admin_email'));
        $user_password = validate('user_password');

        /* check validity of user */
        $check_user = $connectdb->prepare("SELECT * FROM administrators WHERE admin_email = :admin_email AND user_password = :user_password");
        $check_user->bindvalue('admin_email', $admin_email);
        $check_user->bindvalue('user_password', $user_password);
        $check_user->execute();

        if($check_user->rowCount() > 0){
            $_SESSION['users'] = $admin_email;
            if($admin_email == "admin@eristics.com.ng"){
                header("Location: admin.php");
            }else{
                if($user_password == 123){
                    header("Location: change_password.php");
                }else{
                    header("Location: users.php");
                }
            }
            
        }else{
            $_SESSION['error'] = "Invalid Username or Password!";
            header("Location: ../index.php");
        }
    }