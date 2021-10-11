<!doctype html>
<html lang="fr-FR">
    <head>
        <title>MILLENARY</title>
        <meta charset="UTF-8" />
        <meta name="author" content="S.FARIA | T.LECLERD | N.BARRE" />
        <meta name="description" content="Millenary est un projet de création de site web d'e-commerce sur le thème de la vente de montre de luxe réalisé par un groupe d'élève en BTS SIO.">
        <meta name="keywords" content="montres, luxe, vente, commerce, millenary, france, collection, rolex, boutique" /> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600">
        <link rel="stylesheet" href="css/header.css" />
        <link rel="stylesheet" href="css/footer.css" />
        <script src="https://kit.fontawesome.com/f864103c2e.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
            session_start();

            include 'pagesphp/connexion.php';  
            include 'pagesphp/header.php';

            if (!isset($_GET['categorie']) )
            {
                $_GET['categorie']=1;
            }
            switch ($_GET['categorie'])
            {
                default : include 'pagesphp/accueil.php';
                break;

                case 1 : include 'pagesphp/accueil.php';
                break;
            
                case 2 : include 'pagesphp/collection.php';
                break;

                case 3 : include 'pagesphp/about.php';
                break;

                case 4 : include 'pagesphp/contact.php';
                break;

                case 5 : include 'pagesphp/profil.php';
                break;

                case 6 : include 'pagesphp/panier.php';
                break;

                case 7 : include 'pagesphp/conditions.php';
                break;
            }

            include 'pagesphp/footer.php';
        ?>
    </body>
</html>