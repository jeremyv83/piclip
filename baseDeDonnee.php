<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=qveknebu_piclip;charset=utf8','qveknebu_coincoindev', 'Cannards13.');
    //modifier cette adresse//
} catch(Exception $e){
    echo "Erreur : ".$e;
}
$salt = "Canard13";
?>

<!-- $bdd = new PDO('mysql:host=localhost;dbname=piclip;charset=utf8','root', ''); -->
<!-- $bdd = new PDO('mysql:host=localhost;dbname=qveknebu_piclip;charset=utf8','qveknebu_coincoindev', 'Cannards13.'); -->