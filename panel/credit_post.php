<?php
require_once '../config.php'; 

$public_key = $_POST['public_key'];
$private_key = $_POST['private_key'];








$insert = $bdd->prepare('INSERT INTO dedipass(public_key, private_key) VALUES(:public_key,:private_key)');
$insert->execute(array(
    'public_key' => $public_key,
    'private_key' => $private_key
));
header('Location: credit.php');


?>
