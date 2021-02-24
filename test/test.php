<?php
include("../baseDeDonnee.php");

$requete = "SELECT * FROM image ORDER BY date_poste DESC"; 
$sql = $bdd -> query($requete);
$dateRecent = $sql->fetch();
$Recent = $dateRecent['date_poste'];

$requete = "SELECT * FROM image ORDER BY date_poste"; 
$sql = $bdd -> query($requete);
$dateVieux = $sql->fetch();
$Vieux = $dateVieux['date_poste'];


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
        echo $date['titre'];
        echo "<br/>";
        echo $date['description'];
        echo "<br/>";
        echo '<img src="'.$date['route_image'].'"/>';
        echo "<br/>";
    }


// echo $dateRecent['date_poste'];
// echo "<br/>";
// echo $dateVieux['date_poste'];
// echo "<br/>";


?>



