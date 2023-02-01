<?php
session_start();
require_once '../config.php'; 

$stmt = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = :id');
$stmt->bindValue(':id', $_SESSION['id']);
$stmt->execute();
$reponseuser = $stmt->fetch(PDO::FETCH_ASSOC);   

$titre = $_POST['Titre'];
$images = $_POST['Files'];
$pseudo = $reponseuser['pseudo']; 
$view = "0";







$insert = $bdd->prepare('INSERT INTO wiki_categorie(Titre, image, auteur, View) VALUES(:Titre, :Images, :Pseudo,:view)');
$insert->execute(array(
    'Titre' => $titre,
    'Images' => $images,
    'Pseudo' => $pseudo,
    'view' => $view
));
header('Location: categoriewiki.php');


?>
