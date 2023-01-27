<?php
$bdd = new PDO("mysql:host=localhost;dbname=solaria_bdd", "solaria", "Cjv_j7197") or die('Could not Connect to Database');


$requete = $bdd->prepare('SELECT * FROM Utilisateur');
$requete->execute();
$reponse = $requete->fetch(PDO::FETCH_ASSOC);  


$insertUser=$bdd->exec('DELETE FROM Utilisateur WHERE ID="' . $_GET['id'] .'"');
header('Location: player.php');

?>