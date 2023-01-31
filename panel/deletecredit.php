<?php
require_once '../config.php'; 

$requete = $bdd->prepare('SELECT * FROM dedipass');
$requete->execute();
$reponse = $requete->fetch(PDO::FETCH_ASSOC);  


$insertUser=$bdd->exec('DELETE FROM dedipass WHERE id="' . $_GET['id'] .'"');
header('Location: credit.php');

?>