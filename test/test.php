<?php
require("../baseDeDonnee.php");

$requete = "SELECT * FROM image ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();

$compteur=0;

while($date = $sql->fetch())
    {
        echo $date['titre'];
        echo "<br/>";
    }
// echo $compteur;
// $date = $sql->fetch();
// var_dump($date);
//     for ($i = 0; $i < $compteur; $i++) {
//         $date = $sql->fetch();
//         echo $date['route_image'];
//     }

    // for ($i = 0; $i < 4; $i++) {
    //     $date = $sql->fetch();
    //     echo $date['titre'];
    //     echo "<br/>";
    //     echo $date['description'];
    //     echo "<br/>";
    //     echo '<img src="'.$date['route_image'].'"/>';
    //     echo "<br/>";
    // }


// echo $dateRecent['date_poste'];
// echo "<br/>";
// echo $dateVieux['date_poste'];
// echo "<br/>";


?>



