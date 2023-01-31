<?php
session_start();
require_once 'config.php';  
$requete = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = '.$_SESSION['id']);
$requete->execute();
$reponse = $requete->fetch(PDO::FETCH_ASSOC); 

$requete = $bdd->prepare('SELECT * FROM dedipass');
$requete->execute();
$reponsededipass = $requete->fetch(PDO::FETCH_ASSOC); 

$pseudo = $reponse['pseudo']; 


$code = isset($_POST['code']) ? preg_replace('/[^a-zA-Z0-9]+/', '', $_POST['code']) : '';
if( empty($code) ) {
echo 'Vous devez saisir un code';
}
else {
$dedipass = file_get_contents('http://api.dedipass.com/v1/pay/?public_key='.$reponsededipass['public_key'].'&private_key='.$reponsededipass['private_key'].'&code=' . $code);
$dedipass = json_decode($dedipass);
if($dedipass->status == 'success') {
$virtual_currency = $dedipass->virtual_currency;
    echo 'Le code est valide et vous êtes crédité de ' . $virtual_currency . 'Crédits';

    $requetefinal=$bdd->exec("UPDATE Utilisateur SET token=token + $virtual_currency WHERE pseudo='$pseudo'");

}
else {
}
}
header('Location: Profil.php');
?> 
