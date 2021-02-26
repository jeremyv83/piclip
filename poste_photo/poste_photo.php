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
		<title>Piclip - Poste photo</title>
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

		<h1>Poste des photos</h1>
		<div class="photos">
			<div class="card">
			<?php 
            	// afficher le(s) message(s) d'erreur(s)
            	if(isset($_POST['submit']) AND isset($return)){ 
                ?> <p style="color:#FF0000;margin-left:230px;"><?php echo $return; ?></p>
                <?php  

            } ?>
				<form method="POST" enctype="multipart/form-data">
					<div class="parcourir"><img src="<?php if($_FILES){
						echo $file_dest;
					} ?>"/></div>
					<label for="file" class="label-file">Choisir une image...</label>
					<input id="file" class="input-file" type="file" name="image"/>
					<br>
					<input type="text" id="titre" name="titre" placeholder="Titre" />
					
					<h2 class="pseudo">@<?php echo $pseudo; ?></h2>
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
