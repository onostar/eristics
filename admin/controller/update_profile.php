<?php
    include "server.php";
    session_start();

        $email = htmlspecialchars(stripslashes($_POST['restEmail']));
        $restaurant = htmlspecialchars(stripslashes($_POST['restName']));
        $contactName = htmlspecialchars(stripslashes($_POST['contactName']));
        $address = ucwords(htmlspecialchars(stripslashes($_POST['address'])));
        $phone = htmlspecialchars(stripslashes($_POST['contactPhone']));
        $city = htmlspecialchars(stripslashes($_POST['city']));

        $update_profile = $connectdb->prepare("UPDATE administrators SET contact_person = :contact_person, contact_phone = :contact_phone WHERE restaurant_email = :restaurant_email");
        $update_profile->bindvalue('contact_person', $contactName);
        $update_profile->bindvalue('contact_phone', $phone);
        $update_profile->bindvalue('restaurant_email', $email);
        $update_profile->execute();

        if($update_profile){
            $update_profile2 = $connectdb->prepare("UPDATE restaurants SET restaurant_address = :restaurant_address, restaurant_location = :restaurant_location WHERE restaurant_name = :restaurant_name");
            $update_profile2->bindvalue('restaurant_address', $address);
            $update_profile2->bindvalue('restaurant_location', $city);
            $update_profile2->bindvalue('restaurant_name', $restaurant);
            $update_profile2->execute();
            if($update_profile2){
                echo "<p>Profile Updated Successfully!</p>";
            }else{
                echo "<p class='exist'>Update failed!</p>";
            }
            
        }else{
            echo "<p class='exist'>Update failed!</p>";
        }
    
?>