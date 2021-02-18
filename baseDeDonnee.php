<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=piclip;charset=utf8','root', '');
    //modifier cette adresse//
} catch(Exception $e){
    echo "Erreur : ".$e;
}
$salt = "Canard13";
?>