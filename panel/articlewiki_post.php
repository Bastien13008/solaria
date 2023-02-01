<?php
session_start();
require_once '../config.php'; 

$stmt = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = :id');
$stmt->bindValue(':id', $_SESSION['id']);
$stmt->execute();
$reponseuser = $stmt->fetch(PDO::FETCH_ASSOC);   

$titre = $_POST['Descript'];
$images = $_POST['categorie'];
$pseudo = $reponseuser['pseudo']; 
$view = "0";







$insert = $bdd->prepare('INSERT INTO wiki_articles(Article, Categorie, auteur) VALUES(:Titre, :Images, :Pseudo)');
$insert->execute(array(
    'Titre' => $titre,
    'Images' => $images,
    'Pseudo' => $pseudo
));
header('Location: articleswiki.php');


?>
