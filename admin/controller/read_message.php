<?php
    include "server.php";
    session_start();

    if(isset($_GET['read_message'])){
        $message_id = $_GET['read_message'];
        $confirm = $connectdb->prepare("UPDATE messages SET status = 1 WHERE message_id = :message_id");
        $confirm->bindvalue('message_id', $message_id);
        $confirm->execute();

        if($confirm){
            /* echo "<script>alert('Item dispensed!');
            window.open('admin.php', '_parent');</script>"; */
            $_SESSION['success'] = "Message Read";
            header("Location: admin.php");
        }else{
            $_SESSION['error'] = "failed to mark";
            header("Location: admin.php");
        }
    }