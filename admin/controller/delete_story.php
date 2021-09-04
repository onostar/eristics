<?php
    include "server.php";
    session_start();

    if(isset($_GET['delete'])){
        $story_id = $_GET['delete'];
        $confirm = $connectdb->prepare("DELETE FROM stories WHERE story_id = :story_id");
        $confirm->bindvalue('story_id', $story_id);
        $confirm->execute();

        if($confirm){
            /* echo "<script>alert('Item dispensed!');
            window.open('admin.php', '_parent');</script>"; */
            $_SESSION['error'] = "Story Deleted";
            header("Location: admin.php");
        }else{
            $_SESSION['error'] = "failed to Approve";
            header("Location: admin.php");
        }
    }