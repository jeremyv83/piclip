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
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
			rel="stylesheet"
		/>
    <title>Profil utilisateur</title>
</head>
    <body>
    <header>
			<img src="../img/Plan de travail 6.png" alt="" />
			<a href="">Home</a>
			<a href="">Galerie</a>
			<a href="">Se connecter</a>
			<a href="../inscription/formulaire_inscription.php">S'inscrire</a>
		</header>
        
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
                                </div>
                                <div class="imgavatar">
                                    <img id="avatar" src = "<?php echo $avatar ?>"> 
                                      <?php #echo $avatar ?> 
                                </div>
                            </div>
                            <div class="buttons">
                                <button type="submit" id="submit" name="modif_profil">Modifier le profil</button>
                                <button type="submit" id="submit" name="avatar">Modifier l'avatar</button>
                            </div>
                        </form>
                </div>
                <div class="Mes">
                <button type="submit" id="submit" name="submit">Mes Photos</button>
                <button type="submit" id="submit" name="submit">Mes vidéos</button>
                </div>
                <div class="poste">
                    <img src="../img/postephotos.png" alt="" />    
                    <img src="../img/postevideos.png" alt="" />
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



        

    
    
