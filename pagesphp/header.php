<header>
    <div>
        <img src="images/logo.png" alt="Millenary">
    </div>
    <div>
        <ul>
            <a href="index.php?categorie=1"><li>Accueil</li></a>
            <a href="index.php?categorie=2"><li>Collection</li></a>
            <a href="index.php?categorie=3"><li>A propos de nous</li></a>
            <a href="index.php?categorie=4"><li>Contact</li></a>
            <?php
                if (isset($_SESSION['personne'])) {
                    echo '<a href="index.php?categorie=5"><li>Profil</li></a>';
                    echo '<a href="index.php?categorie=6"><li>Panier</li></a>';
                }
            ?>
        </ul>
    </div>
    <div>
        <ul>
        <?php
            if (!isset($_SESSION['personne'])) {
                echo '<a class="btn" onclick="document.querySelector(\'#signUp\').classList.add(\'active\');"><li>S\'inscrire</li></a>';
                echo '<a onclick="document.querySelector(\'#signIn\').classList.add(\'active\');"><li>Se connecter</li></a>';
            } else echo '<a href="pagesphp/unlog.php"><li>Deconnexion</li></a>';
        ?>
        </ul>    
    </div>
    <!-- S'inscrire' Popup -->
    <div class="modal" id="signUp">
        <div class="container">
            <a class="close" onclick="document.querySelector('#signUp').classList.remove('active');"><i class="fas fa-times"></i></a>
            <form method="GET">
                <h1 class="title">S'inscrire</h1>
                <input type="hidden" name="inscription">
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="text" name="nom" placeholder="Nom" required>
                    <label>Nom</label>
                </div>
                <div class="form-group">
                    <i class="fas fa-at"></i>
                    <input type="email" name="email" placeholder="Email" required>
                    <label>Email</label>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="mdp" placeholder="Mot de passe" required>
                    <label>Mot de passe</label>
                </div>
                <input class="form-confirm" type="submit" value="Créer">
            </form>
            <?php
            if (isset($_GET['inscription'])) {
                $req = $pdo->prepare("INSERT INTO client (nomclient, emailclient, mdpclient) values('".$_GET['nom']."', '".$_GET['email']."', '".$_GET['mdp']."')");
                if($req->execute()) echo "<script>alert('Votre compte a bien été créé');</script>";  else echo "<script>alert('Erreur lors de la création de votre compte');</script>";
            }
            ?>
        </div>
    </div>

    <!-- Se connecter -->
    <div class="modal" id="signIn">
        <div class="container">
            <a class="close" onclick="document.querySelector('#signIn').classList.remove('active');"><i class="fas fa-times"></i></a>
            <form>
                <h1 class="title">Se connecter</h1>
                <input type="hidden" name="connexion" >
                <div class="form-group">
                    <i class="fas fa-at"></i>
                    <input type="email" name="email" placeholder="Email" required>
                    <label>Email</label>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="mdp" placeholder="Mot de passe" required>
                    <label>Mot de passe</label>
                </div>
                <input class="form-confirm" type="submit" value="Connexion">
            </form>
            <?php
                if (isset($_GET['connexion'])) {
                    $req = $pdo->prepare('SELECT * FROM client WHERE emailclient="'.$_GET['email'].'" AND mdpclient="'.$_GET['mdp'].'"');
                    $req->execute();
                    $result = $req->fetchAll();
                    if (isset($result[0]['emailclient'])) {
                        if ($_GET['email']=$result[0]['emailclient'] && $_GET['mdp']=$result[0]['mdpclient']) {
                            $_SESSION['personne']['email']=$result[0]['emailclient'];
                            $_SESSION['personne']['nom']=$result[0]['nomclient'];
                            $_SESSION['personne']['num']=$result[0]['numclient'];
                            header('Location: index.php?categorie=5');
                        } else echo "<script>alert('Erreur lors de la connexion au compte');</script>";
                    }
                }
            ?>
        </div>
    </div>
</header>