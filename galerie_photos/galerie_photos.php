<?php

session_start();

require("../baseDeDonnee.php");

// Si la variable $id_user est égale à la variable $_SESSION["id"],
// en bref, si l'utilisateur est connecté, il peut avoir accès à cette page
// sinon l'utilisateur est redirigé vers la page pour se connecter
if(isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}else header("Location: ../login/se_connecter.php");

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/galerie_photos.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link rel="icon" href="../img/Plan de travail 16.png"/>
		<script src="https://kit.fontawesome.com/ddd8de2320.js" crossorigin="anonymous"></script>
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
			rel="stylesheet"
		/>
		<title>Galerie photos</title>
	</head>
	<body>
		<!-- On insére la barre de navigation -->
		<?php include("../navbar/navbar.php"); ?>
		

		<h1>Photos</h1>
		<div class="photos">
			<!-- On insère le traitement de la galerie photo qui se trouve dans un autre fichier -->
			<?php include("traitement.php") ?>
			
		</div>

		
	</body>
</html>
