<?php
    include "server.php";
    session_start();

    if(isset($_GET['delete_message'])){
        $message_id = $_GET['delete_message'];
        $confirm = $connectdb->prepare("DELETE FROM messages WHERE message_id = :message_id");
        $confirm->bindvalue('message_id', $message_id);
        $confirm->execute();

        if($confirm){
            /* echo "<script>alert('Item dispensed!');
            window.open('admin.php', '_parent');</script>"; */
            $_SESSION['error'] = "Message Deleted";
            header("Location: admin.php");
        }else{
            $_SESSION['error'] = "failed to Approve";
            header("Location: admin.php");
        }
    }