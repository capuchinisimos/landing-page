
<?php

if(isset( $_POST['email']))
$email = $_POST['email'];

$content="From: $email \n ";
$recipient = "capuchinisimos@gmail.com";
$mailheader = "Régis-jardin c'est votre nouvel abonné: $email \r\n";
mail($recipient,  $content, $mailheader) or die("Erreur!");
echo "Merci, votre mail a été envoyé!";
?>
