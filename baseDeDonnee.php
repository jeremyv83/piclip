<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=piclip;charset=utf8','root', '');    //modifier cette adresse//
} catch(Exception $e){
    echo "Erreur : ".$e;
}
$salt = "Canard13";
?>

<!-- $bdd = new PDO('mysql:host=localhost;dbname=piclip;charset=utf8','root', ''); -->
<!-- $bdd = new PDO('mysql:host=localhost;dbname=qveknebu_piclip;charset=utf8','qveknebu_coincoindev', 'Cannards13.'); -->


<!-- 20/09/2021 -->
<!-- $bdd = new PDO('mysql:host=localhost;dbname=psagrwdu_piclip;charset=utf8','psagrwdu_coincoindev', 'Cannards13.'); -->