<?php
$name = $_POST['name'] //stores the name we will we in the contact form
$visitor_email = $_POST['email'] //stores visitors email
$subject = $_POST['subject'] //stores subject
$message = $_POST['message'] //stores message

$email_from = 'bryanyoo5433@gmail.com' //email that sends inquiry

$email_subject = 'New Form Submission'//email subject

$email_body = "User Name: $name.\n".
                "User Name: $visitor_email.\n".
                "User Name: $subject.\n".
                "User Name: $message.\n";


$to = "bryanyoo5433@gmail.com"//email id that receives inquiry

$headers = "From: $email_from \r\n";

$headers . = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html"); //directs user to same contact.html page after submitting form


?>