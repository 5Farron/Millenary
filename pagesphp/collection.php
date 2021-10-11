<link rel="stylesheet" href="css/collection.css" />
<div class="main">   

    <?php
        /* IMPORTATION AUTOMATIQUE DES IMAGES ET INFOS DES MONTRES */
        include 'pagesphp/connexion.php';   
        $req = $pdo->prepare("SELECT * FROM categorie;");
        $req->execute();
        $categorie = $req->fetchAll();
        for($j=0; $j<count($categorie); $j++) {
           echo '<h1>'.$categorie[$j]['libellecategorie'].'</h1><br><div class="carousel-articles">';       
            $req = $pdo->prepare("SELECT * FROM montre where numcategorie=".$categorie[$j]['numcategorie']);
            $req->execute();
            $montre = $req->fetchAll();
            for($i=0; $i<count($montre); $i++) {
               // var_dump($montre[$i]);
    ?>
    <a class="carousel-article">
    <div>
        <input type="submit" class="achat" value="Acheter">
    </div>
    <img src="images/montre<?= ($j==1)?($i+5):($i+1)?>.webp">
    <div class="info">
        <h2><?= $montre[$i]['libellemontre'] ?></h2>
        <h1><?= $montre[$i]['prixmontre'] ?>€</h1>
        <h3><?= $montre[$i]['descrptionmontre'] ?></h3>
    </div>
    </a>
    <?php
        }
        echo '</div>';
        }
        // fin de la boucle categorie
    ?>
</div>