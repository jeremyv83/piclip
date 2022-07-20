<?php

// si $_SESSION existe et que le coeur est cliqué
if(isset($_SESSION) && isset($_POST['id_image_coeur']))
// Je prépare la base de données et je lui insère dans la colonne coeur les données "id_user" et "id_image"
$bdd->prepare("INSERT INTO coeur(id_user, id_image) VALUES (:id_user, :id_image)")
    // J'attribue les valeurs $_SESSION["id"] et $_POST['id_image_coeur'] aux champs "id_user" et "id_image" dans ma base de données
    ->execute(array(
      'id_user'=> $_SESSION["id"],
      'id_image'=> $_POST['id_image_coeur']
    ));
    
?>