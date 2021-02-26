<?php

require("../baseDeDonnee.php");


$id_user = $_SESSION["id"];
$requete = "SELECT * FROM video INNER JOIN users ON video.id_user = users.id_user WHERE video.id_user='$id_user' ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();



while($date = $sql->fetch())
    {
        $id_video = $date['id_video'];
        echo '<div class="card">
                    <form method="POST">
                        <a href="../video_click/video_click.php?video='.$date['id_video'].'">
                        <img src="'.$date['route_minia'].'"/>
                        <div class="titre_pseudo">
                            <h3 class="titre">'.$date['titre'].'</h3>
                            <h3 class="pseudo">@'.$date['pseudo'].'</h3>
                        </div>
                        <p>
                            '.$date['description'].'
                        </p>
                        <div class="suppr">
                            <button type="submit" name="supprimer">Supprimer le post</button>
                            <input type="hidden" name="id" value="'.$id_video.'"></input> 
                        </div>
                    </form>
            </div>';
    }

    if(isset($_POST['supprimer'])){
        $id_video=$_POST["id"];
        $requete = "DELETE FROM video WHERE id_video = '$id_video'"; 
        $suppr = $bdd -> prepare($requete);
        $suppr->execute();
        header("Location: mes_videos.php");
        
    }


?>