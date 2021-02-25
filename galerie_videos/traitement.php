<?php

session_start();

require("../baseDeDonnee.php");

if(isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}else header("Location: ../login/se_connecter.php");



$requete = "SELECT * FROM video ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();


while($date = $sql->fetch())
    {
        echo '<div class="card">
                <img src="'.$date['route_minia'].'"/>
                <div class="titre_pseudo">
                    <h3 class="titre">'.$date['titre'].'</h3>
                    <h3 class="pseudo">@pseudo</h3>
                </div>
                <p>
                    '.$date['description'].'
                </p>
            </div>';
    }


?>