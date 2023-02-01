<?php
session_start();
require_once 'config.php'; 

$requete = $bdd->prepare('SELECT * FROM boutique WHERE id="' . $_GET['id'] .'"');
$requete->execute();
$reponse = $requete->fetch(PDO::FETCH_ASSOC);  


$requeteuser = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = '.$_SESSION['id']);
$requeteuser->execute();
$reponseuser = $requeteuser->fetch(PDO::FETCH_ASSOC);   

$pseudo = $reponseuser['pseudo']; 


$requetecheck = $bdd->prepare('SELECT token FROM Utilisateur WHERE pseudo="'.$pseudo.'"');
$requetecheck->execute();
$recup = $requetecheck->fetch(PDO::FETCH_ASSOC);  

if ( $reponse['Prix'] <= $recup['token']){  

    $requetetoken=$bdd->exec('UPDATE Utilisateur SET token= token - '.$reponse['Prix'].' WHERE pseudo="'.$pseudo.'"');
     header('Location: boutique.php');

   } else {

     header('Location: boutique.php');
}



?>
