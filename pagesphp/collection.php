<link rel="stylesheet" href="css/collection.css" />
<div class="main">   

    <?php
        /* IMPORTATION AUTOMATIQUE DES IMAGES */
        include 'pagesphp/connexion.php';   
        $req = $pdo->prepare("SELECT * FROM categorie;");
        $req->execute();
        $categorie = $req->fetchAll();
        for($i=0; $i<count($categorie); $i++) {
           echo '<h1>EN VITRINE</h1><br><div class="carousel-articles">';       
            $req = $pdo->prepare("SELECT * FROM montre where numcategorie=1;");
            $req->execute();
            $montre = $req->fetchAll();
            for($i=0; $i<count($montre); $i++) {
               // var_dump($montre[$i]);
    ?>
    <!-- IMPORTATION AUTOMATIQUE DES INFOS SUR LES MONTRES -->
    <a class="carousel-article">
    <img src="images/montre<?=($i+1)?>.webp">
    <div class="info">
        <h2><?= $montre[$i]['libellemontre'] ?></h2>
        <h1><?= $montre[$i]['prixmontre'] ?>€</h1>
        <h3><?= $montre[$i]['descrptionmontre'] ?></h3>
    </div>
    </a>
    <?php
        }
        echo '</div>';
        echo '<h1>CLASSIQUES</h1><br><div class="carousel-articles">';       
        $req = $pdo->prepare("SELECT * FROM montre where numcategorie=2;");
        $req->execute();
        $montre = $req->fetchAll();
        for($i=0; $i<count($montre); $i++) {
            // var_dump($montre[$i]);
    ?>
    <a class="carousel-article">
    <img src="images/montre<?=($i+1)?>.webp">
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