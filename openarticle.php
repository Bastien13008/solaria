<?php
require_once 'config.php'; 

$requete = $bdd->prepare('SELECT * FROM Article');
$requete->execute();
$reponse = $requete->fetch(PDO::FETCH_ASSOC);  


$insertUser=$bdd->exec('DELETE FROM Dedipass WHERE ID="' . $_GET['id'] .'"');
header('Location: dedipass.php');

?>