<?php
require("../baseDeDonnee.php");



$requete = "SELECT * FROM video INNER JOIN users ON video.id_user = users.id_user ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();

// while  ($date = $sql->fetch())
//     {
//         echo $date['titre'];
//         echo "<br/>";
//     }

    for ($i = 0; $i < 4; $i++) {
        $date = $sql->fetch();
        echo '<div class="card">
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