<?php 


try {
    $bdd = new PDO ('mysql:host=localhost;dbname=piclip;charset=utf8','root', 'root');
    $requete = "SELECT * FROM users WHERE pseudo = 'dazdzad'"; //session//
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("SET NAMES 'utf8'");
  
    $sql = $bdd -> query($requete);
    $donneeUser = $sql->fetch();
    //var_dump($donneeUser);
    $pseudo = $donneeUser['pseudo'];
    $nom = $donneeUser['nom'];
    $prenom = $donneeUser['prenom'];
    $date_naissance = $donneeUser['date_naissance'];
    $email = $donneeUser['email'];
    $date_inscript = $donneeUser['date_inscript'];
    $avatar = $donneeUser['route_avatar'];
}
catch(Exception $e) {
    die("erreur:".$e -> getMessage());
  } 

//  while ($row = $sql -> fetch()) {
  
        
//      var_dump($_SESSION['pseudo']);




?>
