<?php

include("traitement.php");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/se_connecter.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
			rel="stylesheet"
		/>
		<title>Piclip - Se connecter</title>
	</head>
	<body>
		<header>
			<img src="../img/Plan de travail 6.png" alt="" />
			<a href="">Home</a>
			<a href="">Galerie</a>
			<a href="">Se connecter</a>
			<a href="../inscription/formulaire_inscription.php">S'inscrire</a>
		</header>
		<div id="card">
			<h1>Se connecter à</h1>
			<img src="../img/Plan de travail 16.png" id="logogris" alt="" />
			<?php 
            // afficher le(s) message(s) d'erreur(s)
            if(isset($_POST['connect']) AND isset($return)){ 
                ?> <p style="color:#FF0000;margin-left:230px;"><?php echo $return; ?></p>
                <?php  

            } ?>
			<div class="informations">
				<div class="liste_informations">
					<h2>Adresse email:</h2>

					<h2>Mot de passe:</h2>
				</div>
				<form action="#" method="POST">
					<div class="liste_input">
						<input type="text" name="email"/>
						<input type="password" name="motdepasse" />
					</div>
					</div>
					<div class="buttons">
						<button type="submit">Annuler</button>
						<button type="submit" id="submit" name="connect">Se connecter</button>
					</div>
				</form>
			<div class="mdpOublie">Mot de passe oublié ?</div>
		</div>
		<footer>
			<div class="block1">
				<h4>Conditions d'utilisation</h4>
				<h4>Home</h4>
				<h4>Galerie</h4>
			</div>
			<div class="block2">
				<h4>Politique de confidentialité</h4>
				<h4>Se connecter</h4>
				<h4>S'inscrire</h4>
			</div>
			<div class="block3">
				<h4>Aide</h4>
				<h4>Utilisateurs</h4>
			</div>
			<div class="block4">
				<h4>A propos</h4>
				<img src="../img/Plan de travail 16.png" alt="" />
			</div>
		</footer>
	</body>
</html>
