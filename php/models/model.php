<?php

// Appelle à PDO
require_once('php/inc/functions.php');

$reponse = $pdo->prepare("SELECT * FROM coordinates");
$reponse->execute();

echo '<pre>';
$datas= $reponse->fetchAll(PDO::FETCH_ASSOC);
echo '</pre>';

// ENVOIE DANS LE FICHIER JSON
file_put_contents('locations.json', json_encode($datas));
