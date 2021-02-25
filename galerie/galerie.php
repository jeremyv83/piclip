<?php
	session_start();
	if(isset($_SESSION["id"])) {
		$id_user = $_SESSION["id"];
	}else header("Location: ../login/se_connecter.php");
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/galerie.css" />
		<title>Galerie</title>
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
		<div class="container">
			<a href="/galerie_photos/galerie_photos.php"
				><span>Galerie Photos</span></a
			>
			<a href="/galerie_videos/galerie_videos.php"
				><span>Galerie Vidéos</span></a
			>
		</div>
		<!--<footer>
			<div class="block1">
				<h4>Conditions d'utilisation</h4>
				<h4 href="../home/home.php">Home</h4>
				<h4 href="../galerie/galerie.php">Galerie</h4>
			</div>
			<div class="block2">
				<h4>Politique de confidentialité</h4>
				<h4 href="../login/se_connecter.php">Se connecter</h4>
				<h4 href="../inscription/formulaire_inscription.php">
					S'inscrire
				</h4>
			</div>
			<div class="block3">
				<h4>Aide</h4>
				<h4>Utilisateurs</h4>
			</div>
			<div class="block4">
				<h4>A propos</h4>
				<img src="../img/Plan de travail 16.png" alt="" />
			</div>
		</footer>-->
	</body>
</html>
