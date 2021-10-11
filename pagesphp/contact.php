<link rel="stylesheet" href="css/contact.css" />


<div class="container">
    <h2>Formulaire de Contact</h2>
    <br>
    <form action="/action_page.php" class="formulaire">
        <label for="email">Votre email</label>
        <input type="text" id="email" name="email">

        <label for="objet">Objet</label>
        <input type="text" id="objet" name="objet">

        <label for="message">Message</label>
        <textarea id="message" name="message" style="height:200px"></textarea>

        <input type="submit" value="Envoyer">
    </form>
</div>
<?php
$from = $_GET['email'];
$to = 'mjlbarre@mail.com';
$subject = $_GET['objet'];
$message = $_GET['message'];
mail($to,$email, $subject, $message);
?>