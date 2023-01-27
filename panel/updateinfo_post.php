<?php
require_once '../config.php'; 

    $requete = $bdd->prepare('SELECT * FROM Info');
    $requete->execute();
    $reponse = $requete->fetch(PDO::FETCH_ASSOC);  

    $credit = $_POST['credit'];
    $objectif = $_POST['objectif'];

$requetefinal=$bdd->query('UPDATE Info SET credit="-'.$credit.'", Objectif="'.$objectif.'"');
header('Location: infos.php');

?>