<?php
    include "server.php";
    session_start();

    function validate($field){
        if(!isset($_POST[$field])){
            return false;
        }else{
            return htmlspecialchars(stripcslashes($_POST[$field]));
        }
    }
    
    $_SESSION['success'] = "";
    $_SESSION['error'] = "";
    if(isset($_POST['add_banner'])){
        $id= ucwords(validate('ads_id'));
        $title = ucwords(validate('title'));
        
        $photo = $_FILES['photo']['name'];
        $logo = "../../media/".$photo;

        
            if(move_uploaded_file($_FILES['photo']['tmp_name'], $logo)){
                $add_photo = $connectdb->prepare("UPDATE ads SET ads_title = :ads_title, photo = :photo WHERE ads_id = :ads_id");
                $add_photo->bindvalue('ads_title', $title);
                
                $add_photo->bindvalue('photo', $photo);
                $add_photo->bindvalue('ads_id', $id);
                
                $add_photo->execute();

                if($add_photo){
                    $_SESSION['success'] = "Advert <strong>'".$title."'</strong>  Updated Successfully!";
                    header("Location: admin.php");
                    /* echo "<p><span>" . $restaurant . "</span> created successfully!"; */
                }else{
                    $_SESSION['error'] = "$description not Uploaded!";
                    header("Location: admin.php");
                    /* echo "<p>restaurant not created!</p>"; */

                }
            }else{
                /* echo "<p class='exist'>failed to upload logo!</p>"; */
                $_SESSION['error'] = "Photo upload failed!";
                    header("Location: admin.php");
            }
            
        
    }
?>