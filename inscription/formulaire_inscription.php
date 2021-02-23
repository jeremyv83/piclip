<?php
    include("traitement.php");
?>    

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/formulaire_inscription.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
			rel="stylesheet"
		/>
		<title>Piclip - S'inscrire</title>
	</head>
	<body>
		<header>
		<a href="../bienvenue/bienvenue.html"
				><img src="../img/Plan de travail 6.png" alt=""
			/></a>
			<a href="../home/home.html">Home</a>
			<a href="../galerie/galerie.html">Galerie</a>
			<a href="../login/se_connecter.php">Se connecter</a>
			<a href="">s'inscrire</a>
		</header>
		<div id="card">
			<h1>S'inscrire sur</h1>
			<img src="../img/Plan de travail 16.png" id="logogris" alt="" />
			<?php 
            // afficher le(s) message(s) d'erreur(s)
            if(isset($_POST['submit']) AND isset($return)){ 
                ?> <p style="color:#FF0000;margin-left:230px;"><?php echo $return; ?></p>
                <?php  

            } ?>
			<div class="informations">
				<div class="liste_informations">
					<h2>Pseudo:</h2>

					<h2>Adresse email:</h2>
					<h2>Confirmez votre adresse email:</h2>
					<h2>Mot de passe:</h2>
					<h2>Confirmez votre mot de passe:</h2>
					<h2>Date de naissance</h2>
					<h2>Acceptez les conditions d'utilisation Piclip:</h2>
				</div>
				<form method="POST">
					<div class="liste_input">
						<input type="text" name="pseudo" />
						<input type="email" name="email"/>
						<input type="email" name="verifemail"/>
						<input type="password" name="motdepasse" />
						<input type="password" name="verifmdp"/>
						<input type="date" name="datenaissance" pattern="(^(((0[1-9]|1[0-9]|2[0-8])[/](0[1-9]|1[012]))|((29|30|31)[/](0[13578]|1[02]))|((29|30)[/](0[4,6,9]|11)))[/](19|[2-9][0-9])\d\d$)|(^29[/]02[/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)"/>
						<input type="checkbox" id="check" />
					</div>
					<div class="buttons">
						<button>Annuler</button>
						<button type="submit" id="submit" name="submit">S'inscrire</button>
					</div>
				</form>
			</div>
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
