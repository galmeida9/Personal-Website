<?php 
$name = $_POST['Nome'];
$email = $_POST['Email'];
$message = $_POST['Comentario'];
$formcontent="From: $name \n\nMessage: $message";
$recipient = "galmeida9@gmail.com";
$subject = $_POST['Titulo'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
header("Location: https://web.tecnico.ulisboa.pt/ist189446/#contact");
exit;
?>