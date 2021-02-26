<?php



require("../baseDeDonnee.php");

if(isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}else header("Location: ../login/se_connecter.php");



$requete = "SELECT * FROM image INNER JOIN users ON image.id_user = users.id_user ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();


while($date = $sql->fetch())
    {   
  
        echo '<div class="card">
                    <a href="../photo_click/photo_click.php?image='.$date['id_image'].'">
                    
                        <img src="'.$date['route_image'].'"/>
                        <div class="titre_pseudo">
                            <h3 class="titre">'.$date['titre'].'</h3>
                            <h3 class="pseudo">@'.$date['pseudo'].'</h3>
                        </div>
                        <p>
                            '.$date['description'].'
                        </p>
                    </a>
            </div>';
    }
    

?>