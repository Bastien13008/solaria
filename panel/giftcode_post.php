<?php

require_once '../config.php'; 
// Récupération des données envoyées par la méthode POST
$auteur = $_POST['auteur'];
$token = $_POST['token'];
$code = $_POST['code'];

// Préparation de la requête d'insertion
$stmt = $bdd->prepare("INSERT INTO GiftCode (code, token, Auteur) VALUES (:code, :token, :auteur)");

// Liaison des valeurs
$stmt->bindValue(':auteur', $auteur);
$stmt->bindValue(':token', $token);
$stmt->bindValue(':code', $code);

// Exécution de la requête
$stmt->execute();
header('Location: giftcode.php');
?>