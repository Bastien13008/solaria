<?php
require_once '../config.php'; 

$Prix = $_POST['Prix'];
$Images = $_POST['image'];








$insert = $bdd->prepare('INSERT INTO boutique(Prix, image) VALUES(:Prix,:image)');
$insert->execute(array(
    'Prix' => $Prix,
    'image' => $Images
));
header('Location: boutique.php');


?>
