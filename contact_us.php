<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $service = $_POST['service'];
        $content = $_POST['content'];

        $recipient = "info@shawsandmedical.com";
        $subject = "Contact Message From $name";
        $message = "Contact Name: $name \n Phone Number: $phone \n Service reques: $service \n Message: $content";
        $header = "From: $email \r\n";

        mail($recipient, $subject, $message, $header);
        header("Location: index.html");
    }