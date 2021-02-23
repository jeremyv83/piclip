<?php

require("traitement.php");

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/poste_photo.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
			rel="stylesheet"
		/>
		<title>poste photo</title>
	</head>
	<body>
		<header>
			<img src="../img/Plan de travail 6.png" alt="" />
			<a href="">Home</a>
			<a href="">Galerie</a>
			<a href="">Se connecter</a>
			<a href="../inscription/formulaire_inscription.php">S'inscrire</a>
		</header>

		<h1>Poste des photos</h1>
		<div class="photos">
			<div class="card">
				<form method="POST" enctype="multipart/form-data">
					<div class="parcourir"><img src="<?php if($_FILES){
						echo $file_dest;
					} ?>"/></div>
					<input type="file" name="image"/>
					<input type="text" id="titre" name="titre" placeholder="Titre" />
					
					<h2 class="pseudo">@pseudo</h2>
					<textarea
						placeholder="Description"
						name="description"
						id="description"
						cols="62"
						rows="10"
						name="description"
					></textarea>
					<button type="submit" id="valider" name="submit">Valider le post</button>
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
