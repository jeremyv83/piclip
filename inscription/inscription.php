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
        <form method="POST" action="#">
            <input type="text" name="pseudo" placeholder="pseudo" required>
            <input type="password" name="motdepasse" placeholder="mdp" required>
            <input type="password" name="verifmdp" placeholder="Confirmez votre mot de passe" required>
            <input type="text" name="email" placeholder="email" required>
            <input type="text" name="verifemail" placeholder="Confirmez votre adresse email" required>
            <input type="date" name="datenaissance" placeholder="Entrez votre date de naissance" required>
            

            <button type="submit" id="submit" name="submit">S'incrire</button>
        </form>

    
    
</body>
</html>

