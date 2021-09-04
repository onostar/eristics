<?php
    include "server.php";
    session_start();
    if(isset($_POST['subscribe'])){
        $email = htmlspecialchars(stripslashes($_POST['subscribe_email']));

        $check_subscription = $connectdb->prepare("SELECT * FROM subscribers WHERE contact_email = :contact_email");
        $check_subscription->bindvalue("contact_email", $email);
        $check_subscription->execute();
        if($check_subscription->rowCount() > 0){
            echo "<script>alert('You are Already Subscribed to Updates!');
            window.open('../index.php', '_parent');</script>";
        }else{
            $subscribe = $connectdb->prepare("INSERT INTO subscribers (contact_email) values (:contact_email)");
            $subscribe->bindvalue("contact_email", $email);
            $subscribe->execute();
            if($subscribe){
                echo "<script>alert('You have successfully Subscribed to Updates! You will now receive notifications for new items');
                window.open('../index.php', '_parent');</script>";
            }
        }
    }
    