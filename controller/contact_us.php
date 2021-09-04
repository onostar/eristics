<?php
    session_start();
    require "server.php";

    if(isset($_POST['submit_message'])){
        $name = ucwords(htmlspecialchars(stripslashes($_POST['contact_name'])));
        $email = htmlspecialchars(stripslashes($_POST['contact_email']));
        $message = htmlspecialchars(stripslashes($_POST['contact_message']));
        $message = htmlspecialchars(stripslashes($_POST['contact_message']));
        $subject = htmlspecialchars(stripslashes($_POST['mail_subject']));
        
        $send_message = $connectdb->prepare("INSERT INTO messages (contact_name, contact_email, contact_message, mail_subject) VALUES (:contact_name, :contact_email, :contact_message, :mail_subject)");
        $send_message->bindvalue('contact_name', $name);
        $send_message->bindvalue('contact_email', $email); 
        $send_message->bindvalue('contact_message', $message);
        $send_message->bindvalue('mail_subject', $subject);
        $send_message->execute();
        if($send_message){
            /* send mail to admin */
            $subject = "Eristics - $subject";
            $content = "You have a new message contact message from $name";
            $mailHeader = "From: $email";
            mail("admin@eristics.com.ng, onostarmedia@gmail.com", $subject, $content, $mailHeader) or die("Error!");

            echo "<script>
                alert('Thanks for sending us a message. We will be in touch shortly!');
                window.open('../idex.php', '_parent');
            </script>";
        }else{
            echo "<script>
                alert('Message Unsuccessful!');
                window.open('../index.php', '_parent');
            </script>";
        }
    }else{
        echo "Not sent " . $name;
    }