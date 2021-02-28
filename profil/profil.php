<?php

include("traitement.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profil.css" />
    <link rel="icon" href="../img/Plan de travail 16.png"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
			rel="stylesheet"
		/>
    <title>Profil utilisateur</title>
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
        
                <h1>Profil de <?php echo $pseudo; ?></h1>
                <div class="informationsdeprofil">
                    <h2> Informations de Profil:</h2>
                        <form method="POST" action="#">
                            <div class="infoavatar">
                                <div class="infotext">
                                    <p> <b>Pseudo:</b> <?php echo $pseudo; ?></p>
                                    <p> <b> Nom:</b> <?php if ($nom == NULL){
                                        echo "non renseigné";
                                        }else echo $nom;?></p>
                                    <p> <b> Prénom: </b> <?php if ($prenom == NULL){
                                        echo "non renseigné";
                                    }else echo $prenom; ?></p>
                                    <p> <b>Date de naissance:</b> <?php echo $date_naissance; ?></p>
                                    <p> <b>Adresse email: </b><?php echo $email; ?></p>
                                    <p> <b>Date d'inscription:</b> <?php echo $date_inscript; ?></p> 
                                    <p> <b>Nombre de likes donné:</b> <?php echo $nb_likes_user[0]; ?></p>
                                    <p> <b>Nombre de likes reçu:</b> <?php echo $nb_likes_user_recu[0]; ?></p>
                                </div>
                                <div class="imgavatar">
                                    <img id="avatar" src = "<?php echo $avatar ?>"> 
                                      <?php #echo $avatar ?> 
                                </div>
                            </div>
                            <div class="buttons">
                                <button type="submit" id="submit" name="modif_profil">Modifier le profil</button>
                            </div>
                            
                        </form>
                </div>
                <div class="buttonsphotovideos">
			                    <a href="../mes_photos/mes_photos.php"><span>Mes Photos</span></a>
			                    <a href="../mes_videos/mes_videos.php"><span>Mes Vidéos</span></a>
		                    </div>
                <div class="poste">
                    <a href="../poste_photo/poste_photo.php">
                        <img src="../img/postephotos.png" alt="Cliques ici pour poster de nouvelles photos!" />
                    </a>
                    <a href="../poste_video/poste_video.php">    
                        <img src="../img/postevideos.png" alt="Cliques ici pour poster de nouvelles vidéos!" />
                    </a>
                </div>
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

            
    </body>
</html>



        

    
    
