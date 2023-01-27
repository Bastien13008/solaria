<?php
require_once '../config.php'; 

    $requete = $bdd->prepare('SELECT * FROM Utilisateur');
    $requete->execute();
    $reponse = $requete->fetch(PDO::FETCH_ASSOC);  

    $vote="0";

$requetefinal=$bdd->query('UPDATE Utilisateur SET Vote="-'.$vote.'" WHERE ID="' . $_GET['id'] .'"');
header('Location: vote.php');

?>