<link rel="stylesheet" href="css/contact.css" />


<div class="container">
    <h2>Formulaire de Contact</h2>
    <br>
    <form method="post" class="formulaire">
        <label for="email">Votre nom</label>
        <input type="text" id="nom" name="nom">

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
if (isset($_POST) && isset ($_POST['email']) && isset ($_POST['objet']) && isset ($_POST['message']))
{
	extract($_POST);
	if (!empty($nom) && !empty($email) && !empty($objet) && !empty($message))
	{
		$message=str_replace("\'","'",$message);
		$destinataire="mjlbarre@gmail.com";
		$sujet="Formulaire de contact";
		$msg="Une nouvelle question est arrivée \n
		Nom : $nom \n
		Email : $email \n
		Objet : $objet \n
		Message : $message";
		$entete="From: $nom \n Reply-To: $email";
        mail($destinataire,$sujet,$msg,$entete);
        echo "Le mail a bien été envoyé.";
	}
	else
	{
		echo "Vous n'avez pas rempli tous les champs";
	}
}
?>