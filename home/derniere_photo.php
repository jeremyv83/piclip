<?php
require("../baseDeDonnee.php");



$requete = "SELECT * FROM image ORDER BY date_poste DESC"; 
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
                <img src="'.$date['route_image'].'"/>
                <h3 class="titre">'.$date['titre'].'</h3>
                <p maxlenght="10">
                    '.$date['description'].'
                </p>
            </div>';
    }


?>