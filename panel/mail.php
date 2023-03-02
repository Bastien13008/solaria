<?php
require_once '../config.php'; 

$requete = $bdd->prepare('SELECT email FROM Utilisateur WHERE ID="' . $_GET['id'] .'"');
$requete->execute();
$reponse1 = $requete->fetch(PDO::FETCH_ASSOC);  

$requete = $bdd->prepare('SELECT vote FROM Utilisateur WHERE ID="' . $_GET['id'] .'"');
$requete->execute();
$reponse2 = $requete->fetch(PDO::FETCH_ASSOC);  



//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();  // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';  // Specify mailgun SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'postmaster@sandboxb2c6fe849a214b18a22473d2c72a580f.mailgun.org'; // SMTP username from https://mailgun.com/cp/domains
$mail->Password = '8230c3380fc5763361f7ca478188cdfc-15b35dee-14b2e522'; // SMTP password from https://mailgun.com/cp/domains
$mail->SMTPSecure = 'tls';   // Enable encryption, 'ssl'

$mail->From = 'notificationvote@gmail.com'; // The FROM field, the address sending the email 
$mail->addAddress($reponse1['email']);
 // Recipient's email address and optionally a name to identify him
$mail->isHTML(true);   // Set email to be sent as HTML, if you are planning on sending plain text email just set it to false

// The following is self explanatory
$mail->Subject = 'Notification de vote pour le serveur';
$mail->Body    = '<span style="color: red">'.$reponse1['email'].'</span><p>Je vous informe de votre nombre de vote est de <span style="color: red"> '.$reponse2['vote'].' Votes</span> </p>';

if(!$mail->send()) {  

} else {

}
header('Location: vote.php');

?>

