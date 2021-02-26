<?php
session_start();
// Connexion de la base de donnée
require("../baseDeDonnee.php");

//include("traitement.php"); //a modifier//
//Inscription

if (isset($_POST['submit'])) {
    //var_dump($_POST['pseudo']);
    $pseudo=$_POST['pseudo'];
    $motdepasse=$_POST['motdepasse'];
    $verifmdp=$_POST['verifmdp'];
    $email=$_POST['email'];
    $verifemail=$_POST['verifemail'];
    $date_naissance=$_POST['datenaissance'];
    $date_inscript = date('y-m-d');

    if(!empty($pseudo) AND !empty($motdepasse) AND !empty($verifmdp) AND !empty($email) AND !empty($verifemail) AND !empty($date_naissance)){
        if($motdepasse==$verifmdp){
            if(preg_match("/^(?=.{8,}$)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?\W).*$/", $motdepasse) ){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    if($email == $verifemail) {   
                        if($pseudo != "utilisateur") {
                            if((strlen($pseudo) <= 25) AND (strlen($pseudo) >= 6)){
                                if(preg_match("/.[\S]/", $pseudo)){
                                $TestUser = $bdd->query("SELECT id_user FROM users WHERE pseudo='$pseudo'");   
                                if($TestUser->rowCount() < 1){
                                        $testEmail = $bdd->query("SELECT id_user FROM users WHERE email='$email'");
                                        if($testEmail->rowCount() <1){
                                            $motdepasse = sha1($salt.$motdepasse);

                                            $sql= "INSERT INTO users(mot_de_passe, pseudo, email, date_naissance, date_inscript) VALUES (:motdepasse, :pseudo, :email, :date_naissance, :date_inscript)";
                                            $req = $bdd->prepare($sql);  

                                            $req->execute(array(
                                                'motdepasse' => $motdepasse,
                                                'pseudo' => $pseudo,
                                                'email' => $email,
                                                'date_naissance' => $date_naissance,
                                                'date_inscript' => $date_inscript,
                                            ));
                                            $UserData = $TestUser->fetch();
                                            $SESSION["id"] = $UserData["id_user"];
                                            header('Location: ../profil/profil.php');
                                        }else $return = "Email déjà utilisé";  
                                    //header('Location: connect.php');
                                    }else $return = "Pseudo déjà utilisé";
                                }else $return = "Les espacements ne sont pas autorisé";                                     
                            }else $return = "Le pseudo doit être compris entre 6 et 25 caractères";
                            
                        }else $return = 'Le pseudo ne peut pas être "utilisateur"';                          
                            
                    }else $return ="L'adresse mail n'est pas identique'";
                          
                }else $return ="Le mail n'est pas valable";
                
            }else $return = "Le mot de passe n'est pas assez sécurisé";
              
        }else $return = "Les deux mots de passe de correspondent pas";
        
    }else $return = "Un ou plusieurs champs est manquant";
    
}

// if(isset($_POST['login'])) {
//     header('Location: ../login/index.php';
// }



?>