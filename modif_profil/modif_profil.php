<?php
session_start();
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
                        <form method="POST" enctype="multipart/form-data">
                            <div class="infoavatar">
                                <div class="infotext">
                                    <p> <b>Pseudo:</b> <?php echo $pseudo; ?></p>
                                    <?php 
                                    // afficher le(s) message(s) d'erreur(s)
                                    if(isset($_POST['new_pseudo']) AND isset($return)){ 
                                        ?> <p style="color:#FF0000; font-size:small;"><?php echo $return; ?></p>
                                        <?php  
                                    } ?>
                                    <input type="text" name="pseudo" placeholder="pseudo">
                                    <button type="submit" id="submit" name="new_pseudo">Valider le pseudo</button>


                                    <p> <b> Nom:</b> <?php if ($nom == NULL){
                                        echo "non renseigné";
                                        }else echo $nom;?></p>
                                        <?php 
                                        // afficher le(s) message(s) d'erreur(s)
                                        if(isset($_POST['new_nom']) AND isset($return)){ 
                                            ?> <p style="color:#FF0000; font-size:small;"><?php echo $return; ?></p>
                                        <?php  
                                        } ?>
                                        <input type="text" name="nom" placeholder="Nom">
                                        <button type="submit" id="submit" name="new_nom">Valider le nom</button>


                                    <p> <b> Prénom: </b> <?php if ($prenom == NULL){
                                        echo "non renseigné";
                                    }else echo $prenom; ?></p>
                                     <?php 
                                    // afficher le(s) message(s) d'erreur(s)
                                    if(isset($_POST['new_prenom']) AND isset($return)){ 
                                        ?> <p style="color:#FF0000; font-size:small;"><?php echo $return; ?></p>
                                        <?php  
                                        } ?>
                                    <input type="text" name="prenom" placeholder="prenom">
                                    <button type="submit" id="submit" name="new_prenom">Valider le prenom</button>


                                    <p> <b>Date de naissance:</b> <?php echo $date_naissance; ?></p>
                                    <?php 
                                    // afficher le(s) message(s) d'erreur(s)
                                    if(isset($_POST['new_date_naissance']) AND isset($return)){ 
                                        ?> <p style="color:#FF0000; font-size:small;"><?php echo $return; ?></p>
                                        <?php  
                                    } ?>    
                                    <input type="date" name="datenaissance" placeholder="entrer la date de naissance">
                                    <button type="submit" id="submit" name="new_date_naissance">Valider la date de naissance</button>


                                    <p> <b>Adresse email: </b><?php echo $email; ?></p>
                                    <?php 
                                    // afficher le(s) message(s) d'erreur(s)
                                    if(isset($_POST['new_email']) AND isset($return)){ 
                                        ?> <p style="color:#FF0000; font-size:small;"><?php echo $return; ?></p>
                                        <?php  
                                    } ?>
                                    <input type="text" name="email" placeholder="email">
                                    <input type="text" name="verif_email" placeholder="email">
                                    <button type="submit" id="submit" name="new_email">Valider l'adresse mail</button>

                                    <p> <b>Mot de passe </b> </p>
                                    <?php 
                                    // afficher le(s) message(s) d'erreur(s)
                                    if(isset($_POST['new_mdp']) AND isset($return)){ 
                                        ?> <p style="color:#FF0000; font-size:small;"><?php echo $return; ?></p>
                                        <?php  
                                    } ?>
                                    <input type="password" name="mdp" placeholder="Mot de passe">
                                    <input type="password" name="repeat_mdp" placeholder="Répeter mot de passe">
                                    <button type="submit" id="submit" name="new_mdp">Valider le mot de passe</button>

                                    
                                    <p> <b>Date d'inscription:</b> <?php echo $date_inscript; ?></p>
                                </div>
                                <div class="imgavatar">
                                    <img id="avatar" src = "<?php echo $avatar ?>"> 
                                    <input type="file" name="image"/>
                                    <button type="submit" id="submit" name="new_avatar">Valider l'avatar</button>
                                </div>
                            </div>
                            <div class="buttons">
                                <button type="submit" id="submit" name="profil">Retour au profil</button>
                            
                            </div>
                        </form>

    </body>
</html>
