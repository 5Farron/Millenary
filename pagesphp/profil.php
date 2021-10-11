<link rel="stylesheet" href="css/profil.css" />

<div class="container">

    <h2>Votre profil</h2>
     
    <?php echo 'Votre adresse mail : ', $_SESSION['personne']['email']; ?> <br>
    <?php echo 'Votre nom d\'utilisateur : ', $_SESSION['personne']['nom']; ?> <br>
    <?php echo 'Votre numéro d\'utilisateur : ', $_SESSION['personne']['num']; ?>
    

</div>