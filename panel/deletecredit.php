<?php
require_once '../config.php'; 

$requete = $bdd->prepare('SELECT * FROM Credits');
$requete->execute();
$reponse = $requete->fetch(PDO::FETCH_ASSOC);  


$insertUser=$bdd->exec('DELETE FROM Credits WHERE ID="' . $_GET['id'] .'"');
header('Location: credit.php');

?>