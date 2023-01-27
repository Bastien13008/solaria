<?php
$bdd = new PDO("mysql:host=localhost;dbname=solaria_bdd", "solaria", "Cjv_j7197") or die('Could not Connect to Database');


$requete = $bdd->prepare('SELECT * FROM GiftCode');
$requete->execute();
$reponse = $requete->fetch(PDO::FETCH_ASSOC);  


$insertUser=$bdd->exec('DELETE FROM GiftCode WHERE ID="' . $_GET['id'] .'"');
header('Location: giftcode.php');

?>