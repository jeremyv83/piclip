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
			<a href="../galerie_photos/galerie_photos.php"
				><span>Galerie Photos</span></a
			>
			<a href="../galerie_videos/galerie_videos.php"
				><span>Galerie Vidéos</span></a
			>
		</div>
		
	</body>
</html>
