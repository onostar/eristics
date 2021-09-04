<?php
    include "server.php";
    session_start();

    /* function validate($field){
        if(!isset($_POST[$field])){
            return false;
        }else{
            return htmlspecialchars(stripcslashes($_POST[$field]));
        }
    } */
    
    $_SESSION['success'] = "";
    $_SESSION['error'] = "";
    if(isset($_POST['report'])){
        
        $posted_by = ucwords(htmlspecialchars(stripslashes($_POST['posted_by'])));
        $item_category = ucwords(htmlspecialchars(stripslashes($_POST['category'])));
        $item_name = ucwords(htmlspecialchars(stripslashes($_POST['title'])));
        $item_description = htmlspecialchars(stripslashes($_POST['details']));
        $item_foto = $_FILES['foto']['name'];
        $items = "../media/".$item_foto;
        $status = 0;
        $ireport = 1;

        /* check user availability */
        $check_user = $connectdb->prepare("SELECT * FROM stories WHERE title = :title AND posted_by = :posted_by");
        
        $check_user->bindvalue('title', $item_name);
        $check_user->bindvalue('posted_by', $posted_by);
        
        $check_user->execute();

        if($check_user->rowCount() > 0){
            echo "<script>alert('You have posted this story already!');
                window.open('../index.php', '_parent');</script>";

        }else{
            if(move_uploaded_file($_FILES['foto']['tmp_name'], $items)){
                $add_item = $connectdb->prepare("INSERT INTO stories (posted_by, category, title, foto, details, update_status, i_report) VALUES (:posted_by, :category, :title, :foto, :details, :update_status, :i_report)");
                $add_item->bindvalue('posted_by', $posted_by);
                $add_item->bindvalue('category', $item_category);
                $add_item->bindvalue('title', $item_name);
                $add_item->bindvalue('foto', $item_foto);
                $add_item->bindvalue('details', $item_description);
                $add_item->bindvalue('update_status', $status);
                $add_item->bindvalue('i_report', $ireport);
                $add_item->execute();

                if($add_item){
                    echo "<script>alert('Your story was Posted Successfully!  Kindly Await Approval');
                            window.open('../index.php', '_parent');
                        </script>";
                    /* echo "<p><span>" . $item_name . "</span> added successfully!</p>"; */

                    /* Send admin mail */
                    $subject = $item_name;
                    $message = "$posted_by has just posted an I-report to the  archive. /n Kindly view to approve /n <a href='https://admin.eristics.com.ng' title='Order now'>Click to View Now</a>";
                    $mailheader = "From: admin@eristics.com.ng";
                    
                    mail("admin@eristic.com.ng, onostarmedia@gmail.com", $subject, $message, $mailHeader) or die("Error!");
                    
                }else{
                    "<script>
                        alert('Your story was not Posted! Pls try again');
                        window.open('../index.php', '_parent');
                    </script>";

                }
            }else{
                echo "<script>
                    alert('Photo Upload error! \n Retry');
                    window.open('../index.php', '_parent');
                </script>";
            }
            
        }
    }
?>

