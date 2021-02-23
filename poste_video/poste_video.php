<?php
require("traitement.php");

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
<?php include("../navbar/navbar.php"); ?>
		<!--<header>
			<img src="../img/Plan de travail 6.png" alt="" />
			<a href="">Home</a>
			<a href="">Galerie</a>
			<a href="">Se connecter</a>
			<a href="../inscription/formulaire_inscription.php">S'inscrire</a>
		</header>-->
    <form method="POST" enctype="multipart/form-data">
        <p>Mettre la video : </p>
        <input type="file" name="video"/>
        <br>
        <p>Mettre la mignature de la video : </p>
        <input type="file" name="minia"/>
        <br>
        <input type="text" name="titre" placeholder="Le titre..">
        <input type="text" name="description" placeholder="La description..">
        <input type="submit" id="submit" name="submit" value="Envoyer">
    </form>

    <?php
    if(!empty($_FILES)){
        ?>
        <video poster="<?php echo $file_dest_minia?>" width="500" height="500" controls="controls">
            <source src="<?php echo $file_dest_video ?>" type="video/mp4" />
        </video>
        <video poster="<?php echo $file_dest_minia?>" width="500" height="500" controls="controls">
            <source src="<?php echo $file_dest_video ?>" type="video/mp4" />
        </video>
    <?php
    } 
    ?>
</body>
</html>