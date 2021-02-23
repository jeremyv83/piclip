<?php

session_start();
// Connexion de la base de donnée
require("../baseDeDonnee.php");


if(isset($_POST['connect'])) {
    $email=$_POST['email'];
    //$motdepasse=$_POST['motdepasse'];
    $motdepasse=sha1($salt.$_POST['motdepasse']);  //IL FAUDRA PRENDRE UNIQUEMENT CELLE LA POUR LE $motdepasse
   
   if(!empty($email) AND !empty($motdepasse)) {
      $VerifEmail = $bdd->query("SELECT * FROM users WHERE email='$email' AND mot_de_passe='$motdepasse'");
      $UserData = $VerifEmail->fetch();
      if($VerifEmail->rowCount() == 1){
        $_SESSION["id"] = $UserData["id_user"];
        //$_SESSION["id"] = null;
        header('Location: ../profil/profil.php');
    
      }else $return = "Les identifiants sont invalides.";
   }else $return = "Remplir tous les champs.";
}

?>