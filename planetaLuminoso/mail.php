<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message \n  Email: $email";
$recipient = "rycardo56borges@gmail.com";
$subject = "Contact Planeta Luminoso";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error sending your e-mail!");
echo "Sent with success!";


?>


