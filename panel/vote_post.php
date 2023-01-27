<?php
require_once '../config.php'; 

    $requete = $bdd->prepare('SELECT * FROM Utilisateur');
    $requete->execute();
    $reponse = $requete->fetch(PDO::FETCH_ASSOC);  

    $vote = $_POST['vote'];
    $pseudo = $_POST['pseudo'];

$requetefinal=$bdd->query('UPDATE Utilisateur SET Vote="'.$vote.'" WHERE Pseudo="' .$pseudo.'"');
header('Location: vote.php');

?>