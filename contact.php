<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
		<link rel="stylesheet" href="css/contact.css" />
		<link rel="stylesheet" href="css/commun.css" />
		<link href="https://fonts.googleapis.com/css?family=Cantarell|Vollkorn" rel="stylesheet">
	<head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>
			<div id="transition"></div>

			<nav>
    			<ul id="navigation">
       				<li id="ext"><a href="index.php" >Accueil</a></li>
     				<li id="ext"><a href="team.php" >La Team</a></li>
   				    <li id="ext"><a href="moyen.php" >Nos moyens</a></li>
    				<li id="ext"><a href="main_references.php" >Nos références</a></li>
    				<li id="ext"><a href="qualifications.php" >L'ingénierie qualifiée</a></li>
    				<li id="ext"><a href="projet.php" >Projet en cours</a></li>
    				<li id="ext"><a href="partenaires.php" >Nos partenaires</a></li>
  				    <li id="en-cours"><a href="contact.php" >Nous contacter</a></li>
  				</ul>
			</nav>

			<div id="wrap">
			<div id="contenu_page">

				<aside id="bandereau">
					<img src="images/EOLE_bandereau.png" alt="" />
				</aside>

				<div id="contact_page">

					<div id="cadre"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100348.100054508!2d6.241364186721546!3d48.62996419101545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47949b76cf2a2c93%3A0xbfb91538d934e852!2s8+Avenue+de+Marcheville%2C+54110+Varang%C3%A9ville!5e0!3m2!1sfr!2sfr!4v1475653311874" width="1000" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div>

					<form id="contact" method="post" action="traitement_formulaire.php">
						<fieldset><legend>Vos coordonnées :</legend>
							<p id="coordonnee"><label for="nom">Nom :</label><input type="text" id="nom" name="nom" tabindex="1" /></p>
							<p id="coordonnee"><label for="email">Email :</label><input type="text" id="email" name="email" tabindex="2" /></p>
						</fieldset>
 
						<fieldset><legend>Votre message :</legend>
							<p id="objet"><label for="objet">Objet :</label><input type="text" id="objet" name="objet" tabindex="3" /></p>
							<p><label for="message">Message :</label><textarea id="message" name="message" tabindex="4" cols="30" rows="8"></textarea></p>
						</fieldset>
 
						<div id="bouton_envoi"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
					</form>

				</div>
			</div>
			</div>
			<?php include("footer.php"); ?>
		</div>
	</body>
</html>