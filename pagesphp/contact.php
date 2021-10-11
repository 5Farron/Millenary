<link rel="stylesheet" href="css/contact.css" />
<div class="container">
    <h2>Formulaire de Contact</h2>
    <br>
    <form action="pagesphp/contact.php" method="POST" class="formulaire" name="formulaire">
        Prénom
        <input type="text" name="prenom">

        Nom
        <input type="text" name="nom">

        Pays
        <select id="country" name="pays">
            <option value="France">France</option>
            <option value="Suisse">Suisse</option>
            <option value="Angleterre">Angleterre</option>
            <option value="Allemagne">Allemagne</option>
        </select>

        Sujet
        <textarea id="sujet" name="sujet" style="height:200px"></textarea>

        <input type="submit" value="Envoyer">
    </form>
</div>

<?php

    if (isset($_POST['prenom']))
    {
        echo $_POST['prenom'];
    }

?>