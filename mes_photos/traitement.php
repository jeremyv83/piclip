<?php

require("../baseDeDonnee.php");


$id_user = $_SESSION["id"];
$requete = "SELECT * FROM image INNER JOIN users ON image.id_user = users.id_user WHERE image.id_user='$id_user' ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();



while($date = $sql->fetch())
    {
        echo '<div class="card">
                
                        <img src="'.$date['route_image'].'"/>
                        <div class="titre_pseudo">
                            <h3 class="titre">'.$date['titre'].'</h3>
                            <h3 class="pseudo">@'.$date['pseudo'].'</h3>
                        </div>
                        <p>
                            '.$date['description'].'
                        </p>
                        <div class="suppr">
                            <button>Supprimer le post</button>
                        </div>
            </div>';
    }


?>