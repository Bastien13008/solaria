<?php 
    session_start();
    require_once 'config.php'; 

    $requete = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = '.$_SESSION['id']);
    $requete->execute();
    $reponse = $requete->fetch(PDO::FETCH_ASSOC);  
    
    $name = $_POST['password']; 
    $name2 = $_POST['password_retype']; 
    $pseudo = $reponse['pseudo']; 
    
    if($name === $name2){ 
    $insertUser=$bdd->query("UPDATE Utilisateur SET password='$name' WHERE Pseudo='$pseudo'");
    header('Location: Profil.php');
    die();
    }else{
        header('Location: Profil.php');

    }

?>