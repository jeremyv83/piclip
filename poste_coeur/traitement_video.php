<?php

if(isset($_SESSION) && isset($_POST['id_video_coeur']))
$bdd->prepare("INSERT INTO coeur(id_coeur, id_user, id_video) VALUES ('', :id_user, :id_video)")
    ->execute(array(
      'id_user'=> $_SESSION["id"],
      'id_video'=> $_POST['id_video_coeur']
    ));
    
?>