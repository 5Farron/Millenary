<link rel="stylesheet" href="css/contact.css" />
<div class="container">
    <h2>Formulaire de Contact</h2>
    <br>
    <form action="/action_page.php" class="formulaire">
        <label for="fname">Prénom</label>
        <input type="text" id="fname" name="firstname">

        <label for="lname">Nom</label>
        <input type="text" id="lname" name="lastname">

        <label for="country">Pays</label>
        <select id="country" name="country">
            <option value="australia">France</option>
            <option value="canada">Suisse</option>
            <option value="usa">Angleterre</option>
            <option value="usa">Allemagne</option>
        </select>

        <label for="subject">Sujet</label>
        <textarea id="subject" name="subject" style="height:200px"></textarea>

        <input type="submit" value="Envoyer">
    </form>
</div>