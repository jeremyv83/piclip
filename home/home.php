<?php
session_start();
if(isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/home.css" />
		<link rel="stylesheet" href="../css/all.min.css" />
		<script src="https://kit.fontawesome.com/ddd8de2320.js" crossorigin="anonymous"></script>
		
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link rel="icon" href="../img/Plan de travail 16.png"/>
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
			rel="stylesheet"
		/>
		<title>Acceuil</title>
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
		<div id="slider">
			<input type="radio" name="slider" id="slide1" checked />
			<input type="radio" name="slider" id="slide2" />
			<input type="radio" name="slider" id="slide3" />
			<input type="radio" name="slider" id="slide4" />
			<div id="slides">
				<div id="overflow">
					<div class="inner">
						<div class="slide slide_1">
							<div class="slide-content">
								<p>Poste des photos</p>
							</div>
						</div>
						<div class="slide slide_2">
							<div class="slide-content">
								<p>Poste des vidéos</p>
							</div>
						</div>
						<div class="slide slide_3">
							<div class="slide-content">
								<p>Regarde les profils</p>
							</div>
						</div>
						<div class="slide slide_4">
							<div class="slide-content">
								<p>Ajoute des like</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="controls">
				<label for="slide1"></label>
				<label for="slide2"></label>
				<label for="slide3"></label>
				<label for="slide4"></label>
			</div>
			<div id="bullets">
				<label for="slide1"></label>
				<label for="slide2"></label>
				<label for="slide3"></label>
				<label for="slide4"></label>
			</div>
		</div>

		<h1>Dernières photos</h1>
		<div class="dernieres_photos">
			<?php include("derniere_photo.php") ?>
		</div>
		<h1>Dernières vidéos</h1>
		<div class="dernieres_photos">
			<?php include("derniere_video.php") ?>
		</div>
			<!--<div class="card">
				<img src="../img/1.jpg" alt="" />
				<h3 class="titre">Titre</h3>
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit.
					Fugiat nulla repellat maiores delectus assumenda vel placeat
					illum beatae quos? Quam laudantium, quo inventore quas vel
					aliquid officiis et doloribus consectetur?
				</p>
			</div>
			<div class="card">
				<img src="../img/2.jpg" alt="" />
				<h3 class="titre">Titre</h3>
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit.
					Fugiat nulla repellat maiores delectus assumenda vel placeat
					illum beatae quos? Quam laudantium, quo inventore quas vel
					aliquid officiis et doloribus consectetur?
				</p>
			</div>
			<div class="card">
				<img src="../img/3.jpg" alt="" />
				<h3 class="titre">Titre</h3>
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit.
					Fugiat nulla repellat maiores delectus assumenda vel placeat
					illum beatae quos? Quam laudantium, quo inventore quas vel
					aliquid officiis et doloribus consectetur?
				</p>
			</div>
			<div class="card">
				<img src="../img/4.jpg" alt="" />
				<h3 class="titre">Titre</h3>
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit.
					Fugiat nulla repellat maiores delectus assumenda vel placeat
					illum beatae quos? Quam laudantium, quo inventore quas vel
					aliquid officiis et doloribus consectetur?
				</p>
			</div> 
		</div>-->
		<footer>
			<div class="block1">
			<h4><a href="../cg/cg.php">Conditions d'utilisation</h4>
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
				<h4><a href="../A_propos/A_propos.php">A propos</a></h4>
				<a href="../bienvenue/bienvenue.html"
					><img src="../img/Plan de travail 16.png" alt=""
				/></a>
			</div>
		</footer>
		<script src="../js/main.js"></script>
	</body>
</html>
