<!doctype html>
<html lang="fr-FR">
    <head>
        <title>MILLENARY</title>
        <meta charset="UTF-8" />
        <meta name="author" content="BTS SIO" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600">
        <link rel="stylesheet" href="css/header.css" />
        <script src="https://kit.fontawesome.com/f864103c2e.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
            session_start();

            include 'pagesphp/connexion.php';
            include 'pagesphp/accueil.php';
            include 'pagesphp/header.php';

            if (isset($_GET['categorie']) )
            {
                switch ($_GET['categorie'])
                {
                    default : 

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
                }
            }
        ?>
    </body>
</html>