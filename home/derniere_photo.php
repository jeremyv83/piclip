<?php

require("../baseDeDonnee.php");



$requete = "SELECT * FROM image INNER JOIN users ON image.id_user = users.id_user ORDER BY date_poste DESC"; 
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
                <a href="../photo_click/photo_click.php?image='.$date['id_image'].'">
                    <img src="'.$date['route_image'].'"/>
                    <div class="titre_pseudo">
                        <h3 class="titre">'.$date['titre'].'</h3>
                        <h3 class="pseudo">@'.$date['pseudo'].'</h3>
                    </div>
                </a>
                    <div class="heart">
                        <button><img src="../img/heart_red.png"></button> 125
                    </div>
                <a href="../photo_click/photo_click.php?image='.$date['id_image'].'">  
                    <p>
                        '.$date['description'].'
                    </p>
                </a>
                
            </div>';
    }


?>