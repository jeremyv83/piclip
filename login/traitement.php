<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=piclip;charset=utf8','root', 'root');
} catch(Exception $e){
    echo "Erreur : ".$e;
}

$salt = "Canard13";

if(isset($_POST['connect'])) {
    $email=$_POST['email'];
    //$motdepasse=$_POST['motdepasse'];
    $motdepasse=sha1($salt.$_POST['motdepasse']);  //IL FAUDRA PRENDRE UNIQUEMENT CELLE LA POUR LE $motdepasse
   
   if(!empty($email) AND !empty($motdepasse)) {
      $VerifPseudo = $db->query("SELECT * FROM users WHERE email='$email' AND mot_de_passe='$motdepasse'");
      $UserData = $VerifPseudo->fetch();
      if($VerifPseudo->rowCount() == 1){

        header('Location: connexion.php');
    
      }else{
          $return = "Les identifiants sont invalides.";
          echo $return;
        } 
   }
}

?>