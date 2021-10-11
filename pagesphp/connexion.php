<?php
    
    $host="localhost";
    $table="millenary";
    $login="root";
    $mdp="";

    try {
        $pdo=new PDO("mysql:host=$host;dbname=$table","$login","$mdp");
        $pdo->exec('SET NAMES utf8');
    } catch (PDOException $e) {
        $pdo=new PDO("mysql:host=localhost;dbname=2022-promotion_sio_millenary","millenary","123456");
        $pdo->exec('SET NAMES utf8');
    }
?>