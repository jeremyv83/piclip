<?php



require("../baseDeDonnee.php");

if(isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}else header("Location: ../login/se_connecter.php");

$id_video = $_GET['video'];

$requete = "SELECT * FROM video INNER JOIN users ON video.id_user = users.id_user WHERE video.id_video='$id_video'"; 
$sql = $bdd -> prepare($requete);
$sql->execute();

$date = $sql->fetch();

echo '<div class="card">
        <video height="600" controls="controls" poster="'.$date['route_minia'].'">
            <source src="'.$date['route_video'].'"/>
        </video>
        <div class="titre_pseudo">
            <h3 class="titre">'.$date['titre'].'</h3>
            <h2 class="pseudo">@'.$date['pseudo'].'</h2>
        </div>
        <p>
            '.$date['description'].'
        </p>
    </div>';

?>