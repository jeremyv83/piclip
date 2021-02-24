<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/photo_click.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
			rel="stylesheet"
		/>
		<title>Photo</title>
	</head>
	<body>
		<?php include("../navbar/navbar.php"); ?>
		<!--<header>
			<img src="../img/Plan de travail 6.png" alt="" />
			<a href="">Home</a>
			<a href="">Galerie</a>
			<a href="">Se connecter</a>
			<a href="../inscription/formulaire_inscription.php">S'inscrire</a>
		</header>-->

		<h1>Photos</h1>
		<div class="photos">
			<div class="card">
				<img src="../img/1.jpg" alt="" />
				<h3 class="titre">Titre</h3>
				<h2 class="pseudo">@pseudo</h2>
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit.
					Fugiat nulla repellat maiores delectus assumenda vel placeat
					illum beatae quos? Quam laudantium, quo inventore quas vel
					aliquid officiis et doloribus consectetur?Lorem ipsum, dolor
					sit amet consectetur adipisicing elit. Fugiat nulla repellat
					maiores delectus assumenda vel placeat illum beatae quos?
					Quam laudantium, quo inventore quas vel aliquid officiis et
					doloribus consectetur?
				</p>
			</div>
		</div>

		<footer>
			<div class="block1">
				<h4>Conditions d'utilisation</h4>
				<h4><a href="../home/home.php">Home</a></h4>
				<h4><a href="../galerie/galerie.php">Galerie</a></h4>
			</div>
			<div class="block2">
				<h4>Politique de confidentialité</h4>
				<h4><a href="../login/se_connecter.php">Se connecter</a></h4>
				<h4>
					<a href="../inscription/formulaire_inscription.php">
						S'inscrire</a
					>
				</h4>
			</div>
			<div class="block3">
				<h4>Aide</h4>
				<h4>Utilisateurs</h4>
			</div>
			<div class="block4">
				<h4>A propos</h4>
				<a href="../bienvenue/bienvenue.php"
					><img src="../img/Plan de travail 16.png" alt=""
				/></a>
			</div>
		</footer>
	</body>
</html>
