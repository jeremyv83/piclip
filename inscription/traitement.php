<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=piclip;charset=utf8','root', '');
    //modifier cette adresse//
} catch(Exception $e){
    echo "Erreur : ".$e;
}
$salt = "Canard13";

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

    if(!empty($pseudo) AND !empty($motdepasse) AND !empty($verifmdp) AND !empty($email) AND !empty($verifemail) AND !empty($date_naissance)){
        if($motdepasse==$verifmdp){
            if(preg_match("/^(?=.{8,}$)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?\W).*$/", $motdepasse) ){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    if($email == $verifemail) {   
                        if($pseudo != "utilisateur") {
                            if((strlen($pseudo) <= 25) AND (strlen($pseudo) >= 6)){
                                $TestUser = $db->query("SELECT id_user FROM users WHERE pseudo='$pseudo'");   
                                if($TestUser->rowCount() < 1){
                                    $testEmail = $db->query("SELECT id_user FROM users WHERE email='$email'");
                                    if($testEmail->rowCount() <1){
                                        $motdepasse = sha1($salt.$motdepasse);
                                        $sql= "INSERT INTO users(mot_de_passe, pseudo, email, date_naissance) VALUES (:motdepasse, :pseudo, :email, :date_naissance)";
                                        $req = $db->prepare($sql);  
                                        $req->execute(array(
                                            'motdepasse' => $motdepasse,
                                            'pseudo' => $pseudo,
                                            'email' => $email,
                                            'date_naissance' => $date_naissance,

                                        ));
                                    }else{ $return = "Email déjà utilisé";
                                         echo $return;   
                                    }    
                                //header('Location: connect.php');
                                }else{ $return = "Pseudo déjà utilisé";
                                    echo $return;
                                }
                            }else{ $return = "Le pseudo doit être compris entre 6 et 25 caractères";
                                echo $return;
                            }
                        }else{$return = 'Le pseudo ne peut pas être "utilisateur"';
                            echo $return;                            
                        }     
                    }else{$return ="L'adresse mail n'est pas identique'";
                        echo $return;  
                    }      
                }else{$return ="Le mail n'est pas valable";
                    echo $return;
                }
            }else{ $return = "Le mot de passe n'est pas assez sécurisé";
                echo $return;
            }   
        }else{ $return = "Les deux mots de passe de correspondent pas";
            echo $return;
        }
    }else{ $return = "Un ou plusieurs champs est manquant";
        echo $return;
    }
}

// if(isset($_POST['login'])) {
//     header('Location: ../login/index.php');
// }



?>