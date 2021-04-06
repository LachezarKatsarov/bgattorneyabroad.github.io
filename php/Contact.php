<?php 
    $to = "lachezar.kacarov@gmail.com"; // this is your Email address
    $from = $_POST['senderEmail']; // this is the sender's Email address
    $name = $_POST['sender'];
    $subject = "Form submission";
    $message = $_POST['message'];
    
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
?>