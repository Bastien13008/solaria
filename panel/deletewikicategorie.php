<?php
require_once '../config.php'; 

$requete = $bdd->prepare('SELECT * FROM wiki_categorie');
$requete->execute();
$reponse = $requete->fetch(PDO::FETCH_ASSOC);  


$insertUser=$bdd->exec('DELETE FROM wiki_categorie WHERE ID="' . $_GET['id'] .'"');
header('Location: categoriewiki.php');

?>