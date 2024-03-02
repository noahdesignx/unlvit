<?php
$first_name = $_POST["First Name"];
$last_name =  $_POST["Last Name"];
$email = $_POST["Email"];
$message = $_POST["Message"];

$email_from = "UNLV IT Workforce Pipeline Program";

$email_subject = "Website Contact Message";

$email_body = 
"First Name: $first_name\n" 
"Last Name: $last_name\n"
"Email: $email\n"
"Message: $message\n"

$to = "itworkforce@unlv.edu";

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>