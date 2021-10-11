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
    <?php
    if (isset($_SESSION['personne'])) echo "<form method='GET'><input type='hidden' name='categorie' value=2 /><div><input type='submit' class='achat' value='Acheter' name='panier' id=$i></div></form>";
    ?>
    <img src="images/montre<?= ($j==1)?($i+5):($i+1)?>.webp" alt="Montre Rolex">
    <div class="info">
        <h2><?= $montre[$i]['libellemontre'] ?></h2>
        <h1><?= $montre[$i]['prixmontre'] ?>€</h1>
        <h3><?= $montre[$i]['descrptionmontre'] ?></h3>
    </div>
    </a>
    <?php
    $b = $i+1;
        }
        echo '</div>';
        }
        // fin de la boucle categorie

        if (isset($_GET['panier'])) {
            $req = $pdo->prepare("INSERT INTO acheter_montre_achat (nummontre, libellemontre, qte) SELECT nummontre, libellemontre, 1 FROM montre WHERE nummontre = $b");
            $req->execute();
            if($req->execute()) {
                $result = $_GET['panier'];
                $_SESSION['code'] = $i;
                header('Location: index.php?categorie=6');
            }
            else echo "<script>alert('Erreur lors de votre tentative d'achat');</script>";
        }
    ?>
</div>