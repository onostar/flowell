<?php

    if(isset($_POST['submit_request'])){
        $name = $_POST['client_name'];
        $email = $_POST['client_email'];
        $phone = $_POST['client_phone'];
        $age = $_POST['client_age'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $service = $_POST['service'];
        $appointment_date = $_POST['appointment_date'];
        $time = $_POST['appointment_time'];
        $content = $_POST['message'];

        $recipient = "info@flowellpharmacy.com";
        $subject = "Appoitment Booking From $name";
        $message = "Contact Name: $name \n Phone Number: $phone \n Gender: $gender \n Residential Address: $address \n Age: $age \n Purpose of Appointment: $service \n Appointment Date: $appointment_date \n Time: $time \n Message: $content";
        $header = "From: $email \r\n";

        mail($recipient, $subject, $message, $header);
        header("Location: index.html");
    }