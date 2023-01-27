<?php
session_start();

require_once 'config.php'; 

 

    $code = $_POST['key'];

    $requetecheck = $bdd->prepare('SELECT Statut FROM GiftCode WHERE code="'.$code.'"');
    $requetecheck->execute();
    $recup = $requetecheck->fetch(PDO::FETCH_ASSOC);  

    
    $requetesolde = $bdd->prepare('SELECT token FROM GiftCode WHERE code="'.$code.'"');
    $requetesolde->execute();
    $recupsolde = $requetesolde->fetch(PDO::FETCH_ASSOC); 

    $requeteuser = $bdd->prepare('SELECT * FROM Utilisateur');
    $requeteuser->execute();
    $reponseuser = $requeteuser->fetch(PDO::FETCH_ASSOC);   
    $pseudo = $reponseuser['pseudo']; 


    var_dump($recupsolde['token']);

    if ($recup['Statut'] == 0){  
        $requetedisable=$bdd->exec('UPDATE GiftCode SET Statut="1" WHERE code="'.$code.'"');
        $requetedisable=$bdd->exec('UPDATE Utilisateur SET token= token + '.$recupsolde['token'].' WHERE pseudo="'.$pseudo.'"');
        header('Location: Profil.php');

    }
    elseif ($recup['Statut'] == 1) 
    {
        header('Location: Profil.php');

    }

?>