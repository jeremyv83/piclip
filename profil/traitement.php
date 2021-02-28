<?php 
session_start();
require("../baseDeDonnee.php");



if(isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}else header("Location: ../login/se_connecter.php");

    $requete = "SELECT * FROM users WHERE id_user = '$id_user'"; //session//
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("SET NAMES 'utf8'");
  
    $sql = $bdd -> query($requete);
    $donneeUser = $sql->fetch();
    //var_dump($donneeUser);
    $pseudo = $donneeUser['pseudo'];
    $nom = $donneeUser['nom'];
    $prenom = $donneeUser['prenom'];
    $date_naissance_us = $donneeUser['date_naissance'];
    $date_naissance = implode('/',array_reverse(explode('-',$date_naissance_us)));
    $email = $donneeUser['email'];
    $date_inscript_us = $donneeUser['date_inscript'];
    $date_inscript = implode('/',array_reverse(explode('-',$date_inscript_us)));
    $avatar = $donneeUser['route_avatar'];

    $requete_like = "SELECT COUNT(*) FROM coeur WHERE coeur.id_user = " . $_SESSION["id"];
    $nb_likes_user = $bdd -> query($requete_like)
                         -> fetch();

    $requete_like_recu = "SELECT COUNT(*) FROM coeur WHERE id_image IN ( SELECT id_image FROM image WHERE id_user = " . $_SESSION["id"] . ") OR id_video IN (SELECT id_video FROM video WHERE id_user = " . $_SESSION["id"] ." )";
    $nb_likes_user_recu = $bdd -> query($requete_like_recu)
                                -> fetch();

//  while ($row = $sql -> fetch()) {
  
        
//      var_dump($_SESSION['pseudo']);
if(isset($_POST['modif_profil'])){
    header("Location: ../modif_profil/modif_profil.php");
}



?>
