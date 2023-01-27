<?php
session_start();
require_once '../config.php'; 

$stmt = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = :id');
$stmt->bindValue(':id', $_SESSION['id']);
$stmt->execute();
$reponseuser = $stmt->fetch(PDO::FETCH_ASSOC);   

$title = $_POST['Prix'];
$images = $_POST['Files'];
$pseudo = $reponseuser['pseudo']; 







$insert = $bdd->prepare('INSERT INTO Credits(Images, Prix, Auteur) VALUES(:Images, :Title,:Pseudo)');
$insert->execute(array(
    'Title' => $title,
    'Images' => $images,
    'Pseudo' => $pseudo
));
header('Location: credit.php');


?>
