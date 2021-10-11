<?php
$req=$pdo->prepare("SELECT * FROM client WHERE numclient =".$_GET['numclient']);
$req->execute();
$result=$req->fetchAll();
?>
<link rel="stylesheet" href="css/profil.css" />

<div class="container">

    <h2>Votre profil</h2>

    <li>Votre nom : <?= $result[0]['nomclient'] ?> </li>
    <li>Votre e-mail : <?= $result[0]['emailclient'] ?></li>
    <li>Votre numero : <?= $result[0]['numclient'] ?></li>
    <br>
    <h2>Votre panier</h2>
    <div class="containerbis">
