<?php
    include "server.php";
    session_start();

    if(isset($_GET['update'])){
        $story_id = $_GET['update'];
        $confirm = $connectdb->prepare("UPDATE stories SET update_status = 1 WHERE story_id = :story_id");
        $confirm->bindvalue('story_id', $story_id);
        $confirm->execute();

        if($confirm){
            /* echo "<script>alert('Item dispensed!');
            window.open('admin.php', '_parent');</script>"; */
            $_SESSION['success'] = "I-report Approved";
            header("Location: admin.php");
        }else{
            $_SESSION['error'] = "failed to Approve";
            header("Location: admin.php");
        }
    }