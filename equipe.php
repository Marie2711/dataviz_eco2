<?php
$pdo = new PDO("mysql:host=localhost;dbname=sakila;charset=utf8", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$stmt = $pdo->prepare("
SELECT *
FROM staff s
JOIN address a
    ON s.address_id = a.address_id
");
$stmt->execute();
$staff = $stmt->fetchAll(PDO::FETCH_ASSOC);
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe</title>
</head>
<body>
    <h1>Staff</h1>
    <table border=1>
    <tr>
        <td>Photo</td>
        <td>NOM</td>
        <td>Prénom</td>
        <td>email</td>
        <td>Adresse du magasin</td>
    </tr>
    <?php foreach($staff as $staf): ?>
    <tr>
        <td>
            <?php if($staf['picture'] != null): ?>
                <img src="data:image/jpeg;base64,<?= base64_encode($staf['picture'])?>"/>
            <?php else: ?>
            <p>Pas de photo</p>
            <?php endif; ?>
        </td>
        <td><?= strtoupper($staf["last_name"])?></td>
        <td><?= $staf["first_name"]?></td>
        <td><?= strtolower($staf["email"])?></td>
        <td><?= $staf["address"]?></td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>