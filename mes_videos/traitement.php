<?php

require("../baseDeDonnee.php");


$id_user = $_SESSION["id"];
$requete = "SELECT * FROM video INNER JOIN users ON video.id_user = users.id_user WHERE video.id_user='$id_user' ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();



while($date = $sql->fetch())
    {
        echo '<div class="card">
        <a href="../video_click/video_click.php?video='.$date['id_video'].'">
                        <img src="'.$date['route_minia'].'"/>
                        <div class="titre_pseudo">
                            <h3 class="titre">'.$date['titre'].'</h3>
                            <h3 class="pseudo">@'.$date['pseudo'].'</h3>
                        </div>
                        <p>
                            '.$date['description'].'
                        </p>
            </div>';
    }


?>