<?php
session_start();
require_once '../config.php'; 

$stmt = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = :id');
$stmt->bindValue(':id', $_SESSION['id']);
$stmt->execute();
$reponseuser = $stmt->fetch(PDO::FETCH_ASSOC);   

$pseudo = $reponseuser['pseudo']; 
$title = $_POST['Title'];
$desc = $_POST['Descript'];
$images = $_POST['Files'];

date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d H:i:s");

$solution = "Dedipass";




$insert = $bdd->prepare('INSERT INTO Article(Title, Descript, Images, date,pseudo) VALUES(:Title, :Descript, :Images,:date, :Pseudo)');
$insert->execute(array(
    'Title' => $title,
    'Descript' => $desc,
    'Images' => $images,
    'date' => $date,
    'Pseudo' => $pseudo
));
header('Location: article.php');

?>
