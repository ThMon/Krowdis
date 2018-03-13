<?php

$usermail = $_POST['mail'];
$usersite = "";
$subject = "Demande contact Krowdis";
$usermessage= $_POST['message'];
$mail = 'contact@krowdis.com'; // Déclaration de l'adresse de destination.


if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "...";
$message_html = "<html><head></head><body>...</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Demande renseignement krowdis";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"landing\"<loic@krowdis.com>".$passage_ligne;
$header.= "Reply-to: \"moreau\" <thibaut@krowdis.com>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$nom.$passage_ligne.$message_txt.$passage_ligne.$usersite.$passage_ligne.$subject.$passage_ligne.$usermail.$passage_ligne.$usermessage.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$nom.$passage_ligne.$message_txt.$passage_ligne.$usersite.$passage_ligne.$subject.$passage_ligne.$usermail.$passage_ligne.$usermessage.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========
echo "c'est bon";
header('Location: index.php');
exit;
?>