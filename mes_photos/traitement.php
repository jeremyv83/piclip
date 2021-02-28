<?php

require("../baseDeDonnee.php");

include("../poste_coeur/traitement_image.php");


$id_user = $_SESSION["id"];
$requete = "SELECT * FROM image INNER JOIN users ON image.id_user = users.id_user WHERE image.id_user='$id_user' ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();



while($date = $sql->fetch())
    {   
        $id_image = $date['id_image'];
        echo '<div class="card">
                    <form method="POST">
                        <img src="'.$date['route_image'].'"/>
                        <div class="titre_pseudo">
                            <h3 class="titre">'.$date['titre'].'</h3>
                            <h3 class="pseudo">@'.$date['pseudo'].'</h3>
                        </div>
                        <p class="overflow-ellipsis">
                            '.$date['description'].'
                        </p>
                        <div class="suppr">
                            <button type="submit" name="supprimer">Supprimer le post</button>
                            <input type="hidden" name="id" value="'.$id_image.'"></input> 
                        </div>
                    </form>
            </div>';
            
            
    }

    if(isset($_POST['supprimer'])){
        $id_image=$_POST["id"];
        $requete = "DELETE FROM image WHERE id_image = '$id_image'"; 
        $suppr = $bdd -> prepare($requete);
        $suppr->execute();
        header("Location: mes_photos.php");
        
    }



?>
