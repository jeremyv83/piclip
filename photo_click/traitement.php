<?php

session_start();

require("../baseDeDonnee.php");

if(isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}else header("Location: ../login/se_connecter.php");

$id_image = $_GET['image'];

$requete = "SELECT * FROM image INNER JOIN users ON image.id_user = users.id_user WHERE image.id_image='$id_image'"; 
$sql = $bdd -> prepare($requete);
$sql->execute();

$date = $sql->fetch();

echo '<div class="card">
            <img src="'.$date['route_image'].'"/>
            <div class="titre_pseudo">
                <h3 class="titre">'.$date['titre'].'</h3>
                <h2 class="pseudo">@'.$date['pseudo'].'</h2>
            </div>
            <p>
                '.$date['description'].'
            </p>
    </div>';

?>