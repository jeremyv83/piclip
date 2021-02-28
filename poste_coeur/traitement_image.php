<?php

if(isset($_SESSION) && isset($_POST['id_image_coeur']))
$bdd->prepare("INSERT INTO coeur(id_user, id_image) VALUES (:id_user, :id_image)")
    ->execute(array(
      'id_user'=> $_SESSION["id"],
      'id_image'=> $_POST['id_image_coeur']
    ));
    
?>