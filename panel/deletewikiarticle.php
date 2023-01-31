<?php
require_once '../config.php'; 

$requete = $bdd->prepare('SELECT * FROM wiki_articles');
$requete->execute();
$reponse = $requete->fetch(PDO::FETCH_ASSOC);  


$insertUser=$bdd->exec('DELETE FROM wiki_articles WHERE ID="' . $_GET['id'] .'"');
header('Location: articleswiki.php');

?>