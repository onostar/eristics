<?php
    include "server.php";
    session_start();

    if(isset($_GET['remove'])){
        $id = $_GET['remove'];
        $delete_featured = $connectdb->prepare("UPDATE stories SET headline_id = 0 WHERE story_id = :story_id");
        $delete_featured->bindvalue('story_id', $id);
        $delete_featured->execute();

        if($delete_featured){
            $_SESSION['success'] = "Story Removed from Headline";
            header("Location: admin.php");
        }else{
            $_SESSION['error'] = "failed to remove";
            header("Location: admin.php");
        }
    }