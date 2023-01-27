<?php

$bdd = new PDO("mysql:host=localhost;dbname=solaria_bdd", "solaria", "Cjv_j7197") or die('Could not Connect to Database');

// Récupération des données envoyées par la méthode POST
$tel = $_POST['tel'];
$info = $_POST['info'];
$prix = $_POST['prix'];

// Préparation de la requête d'insertion
$stmt = $bdd->prepare("INSERT INTO Dedipass (Tel, Info, Prix) VALUES (:Tel, :Info, :Prix)");

// Liaison des valeurs
$stmt->bindValue(':Tel', $tel);
$stmt->bindValue(':Info', $info);
$stmt->bindValue(':Prix', $prix);

// Exécution de la requête
$stmt->execute();
header('Location: dedipass.php');
?>