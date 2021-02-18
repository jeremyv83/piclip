<?php

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
    <form action="#" method="POST">
            <input type="text" name="pseudo" placeholder="Pseudo" required>
            <input type="password" name="motdepasse" placeholder="Mot de passe" required>
            <button type="submit" id="submit" name="connect" value="Connexion">Connexion</button> 
    </form>
</body>
</html>