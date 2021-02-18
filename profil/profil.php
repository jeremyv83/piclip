<?php
session_start();
include("traitement.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Profil de <?php echo $pseudo; ?></h1>
            
            <h2> Informations de Profil:</h2>
        <form method="POST" action="#">
            <p> Pseudo: <?php echo $pseudo; ?></p>
            <p> Nom: <?php if ($nom == NULL){
                echo "Pas de nom renseigné";
                }else echo $nom;?></p>
            <p> Prénom: <?php if ($prenom == NULL){
                echo "Pas de prénom renseigné";
            }else echo $prenom; ?></p>
            <p> Date de naissance: <?php echo $date_naissance; ?></p>
            <p> Adresse email <?php echo $email; ?></p>
            <p> Date d'inscription: <?php echo $date_inscrip; ?></p> 
            <img src = "<?php echo $avatar ?>" >

            <button type="submit" id="submit" name="submit">Modifier le profil profil</button>
    </form>

            
    </body>
</html>



        

    
    
