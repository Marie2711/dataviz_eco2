<?php

// Appelle à PDO
require_once('php/inc/functions.php');

$reponse = $pdo->prepare("
SELECT *
FROM coordinates c
JOIN coordinates_info ci
    ON c.locationsID = ci.locationsID
");
$reponse->execute();
$datas= $reponse->fetchAll(PDO::FETCH_ASSOC);

// ENVOIE DANS LE FICHIER JSON
file_put_contents('locations.json', json_encode($datas));
