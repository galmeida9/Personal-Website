<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n\nMessage: $message";
$recipient = "galmeida9@gmail.com";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
header("Location: https://web.tecnico.ulisboa.pt/ist189446/contact.html");
exit;
?>