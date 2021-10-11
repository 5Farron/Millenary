<header>
    <div>
        <img src="images/logo.png">
    </div>
    <div>
        <ul>
            <li><a href="index.php?categorie=1">Accueil</a></li>
            <li><a href="index.php?categorie=2">Collection</a></li>
            <li><a href="index.php?categorie=3">A propos de nous</a></li>
            <li><a href="index.php?categorie=4">Contact</a></li>
        </ul>
    </div>
    <div>
        <ul>
            <li><a class="btn" onclick="document.querySelector('#signUp').classList.add('active');">S'inscrire</a></li>
            <li><a onclick="document.querySelector('#signIn').classList.add('active');">Se connecter</a></li>
        </ul>       
    </div>

    <!-- S'inscrire' Popup -->
    <div class="modal" id="signUp">
        <div class="container">
            <a class="close" onclick="document.querySelector('#signUp').classList.remove('active');"><i class="fas fa-times"></i></a>
            <form>
                <h1 class="title">S'inscrire</h1>
                <div class="form-group">
                    <i class="fas fa-at"></i>
                    <input type="email" placeholder="Email" required>
                    <label>Email</label>
                </div>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="text" placeholder="Nom" required>
                    <label>Nom</label>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mot de passe" required>
                    <label>Mot de passe</label>
                </div>
                <input class="form-confirm" href="#" type="submit" value="Créer">
            </form>
        </div>
    </div>

    <!-- Se connecter -->
    <div class="modal" id="signIn">
        <div class="container">
            <a class="close" onclick="document.querySelector('#signIn').classList.remove('active');"><i class="fas fa-times"></i></a>
            <form>
                <h1 class="title">Se connecter</h1>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="text" placeholder="Nom" required>
                    <label>Nom</label>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mot de passe" required>
                    <label>Mot de passe</label>
                </div>
                <input class="form-confirm" href="#" type="submit" value="Connexion">
            </form>
        </div>
    </div>
</header>