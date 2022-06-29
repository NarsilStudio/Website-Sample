<?php
    $user_name = $_POST["name"];
    $user_email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $email_from = "example@gmail.com";
    $email_subject = "Answer";
    $email_body = 
        "User Name: $user_name.\n".
        "User Email: $user_email.\n".
        "Subject: $subject.\n".
        "Message: $message.\n";
    $to = "admin@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply to: $user_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.php")
?>