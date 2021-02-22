<?php 


try {
    $bdd = new PDO ('mysql:host=localhost;dbname=piclip;charset=utf8','root', 'root');
    $requete = "SELECT * FROM users WHERE id_user = '14'"; //session//
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
}
catch(Exception $e) {
    die("erreur:".$e -> getMessage());
  } 

//  while ($row = $sql -> fetch()) {
  
        
//      var_dump($_SESSION['pseudo']);
if(isset($_POST['modif_profil'])){
    header("Location: ../modif_profil/modif_profil.php");
}



?>
