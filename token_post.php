<?php
session_start();
require_once 'config.php'; 

    $requeteuser = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = '.$_SESSION['id']);
    $requeteuser->execute();
    $reponseuser = $requeteuser->fetch(PDO::FETCH_ASSOC);   
    
    $pseudosender = $_POST['pseudo'];
    $token = $_POST['token'];
    $pseudo = $reponseuser['pseudo']; 


    $requetecheck = $bdd->prepare('SELECT token FROM Utilisateur WHERE pseudo="'.$pseudo.'"');
    $requetecheck->execute();
    $recup = $requetecheck->fetch(PDO::FETCH_ASSOC);  

 

    $requetepseudo = $bdd->prepare('SELECT * FROM Utilisateur WHERE pseudo = "'.$pseudosender.'"');
    $requetepseudo->execute();
    $recuppseudo = $requetepseudo->fetch(PDO::FETCH_ASSOC);
    if($recuppseudo){
        if ($token <= $recup['token'] && $token > 0){  

            $requetetoken=$bdd->exec('UPDATE Utilisateur SET token= token + '.$token.' WHERE pseudo="'.$pseudosender.'"');
            $requetetoken=$bdd->exec('UPDATE Utilisateur SET token= token - '.$token.' WHERE pseudo="'.$pseudo.'"');
            header('Location: Profil.php');
    
        }    } else {
            header('Location: Profil.php');
        }
    




?>