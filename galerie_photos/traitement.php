<?php

session_start();

require("../baseDeDonnee.php");

if(isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}else header("Location: ../login/se_connecter.php");



$requete = "SELECT * FROM image ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();


while($date = $sql->fetch())
    {
        echo '<div class="card">
                <img src="'.$date['route_image'].'"/>
                <h3 class="titre">'.$date['titre'].'</h3>
                <p>
                    '.$date['description'].'
                </p>
            </div>';
    }


?>