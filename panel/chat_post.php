<?php
session_start();
require_once '../config.php'; 

$stmt = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = :id');
$stmt->bindValue(':id', $_SESSION['id']);
$stmt->execute();
$reponseuser = $stmt->fetch(PDO::FETCH_ASSOC);   

$pseudo = $reponseuser['pseudo']; 
$desc = htmlspecialchars($_POST['Message']);

date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d H:i:s");





$insert = $bdd->prepare('INSERT INTO Message(Message, Date, Auteur) VALUES(:Message, :Date, :Auteur)');
$insert->execute(array(
    'Message' => $desc,
    'Date' => $date,
    'Auteur' => $pseudo
));
header('Location: chat.php');

?>
