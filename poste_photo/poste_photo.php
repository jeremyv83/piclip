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
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image"/>
        <input type="text" name="titre" placeholder="Le titre..">
        <input type="text" name="description" placeholder="La description..">
        <input type="submit" id="submit" name="submit" value="Envoyer">
    </form>
</body>
</html>