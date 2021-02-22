<?php 


try {
    $id_user = 14;
    $bdd = new PDO ('mysql:host=localhost;dbname=piclip;charset=utf8','root', 'root');
    $requete = "SELECT * FROM users WHERE id_user = '$id_user'"; //session//
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("SET NAMES 'utf8'");
    $salt = "Canard13";
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
if(isset($_POST['profil'])){
    header("Location: ../profil/modif_profil.php");
}

if(isset($_POST['new_pseudo'])){
    $new_pseudo = $_POST['pseudo'];
    if(!empty($new_pseudo)){
        if($new_pseudo != "utilisateur") {
            if((strlen($new_pseudo) <= 25) AND (strlen($new_pseudo) >= 6)){
                $TestUser = $bdd->query("SELECT id_user FROM users WHERE pseudo='$new_pseudo'");   
                if($TestUser->rowCount() < 1){
                    
                    $sql_modif = "UPDATE users SET pseudo = :new_pseudo WHERE id_user = '$id_user'";
                    $req = $bdd->prepare($sql_modif);
                    $req->execute(array('new_pseudo'=>$new_pseudo));

                    header("Location: ../modif_profil/modif_profil.php");
                }else $return = "Pseudo déjà utilisé";
            }else $return = "Le pseudo doit être compris entre 6 et 25 caractères";    
        }else $return = 'Le pseudo ne peut pas être "utilisateur"'; 
    }else $return = 'Champs vide';   
}

if(isset($_POST['new_nom'])){
    $new_nom = $_POST['nom'];
    if(!empty($new_nom)){
    $sql_modif = "UPDATE users SET nom = :new_nom WHERE id_user = '$id_user'";
    $req = $bdd->prepare($sql_modif);
    $req->execute(array('new_nom'=>$new_nom));

    header("Location: ../modif_profil/modif_profil.php");
    }else $return = "Champs vide";
}


if(isset($_POST['new_prenom'])){
    $new_prenom = $_POST['prenom'];
    if(!empty($new_prenom)){

        $sql_modif = "UPDATE users SET prenom = :new_prenom WHERE id_user = '$id_user'";
        $req = $bdd->prepare($sql_modif);
        $req->execute(array('new_prenom'=>$new_prenom));
        header("Location: ../modif_profil/modif_profil.php");
    }else $return = "Champs vide";
}

if(isset($_POST['new_date_naissance'])){
    $new_date_naissance = $_POST['datenaissance'];
    if(!empty($new_date_naissance)){

        $sql_modif = "UPDATE users SET date_naissance = :new_date_naissance WHERE id_user = '$id_user'";
        $req = $bdd->prepare($sql_modif);
        $req->execute(array('new_date_naissance'=>$new_date_naissance));
        header("Location: ../modif_profil/modif_profil.php");
    }else $return = "Champs vide";
}

if(isset($_POST['new_email'])){
    $new_email = $_POST['email'];
    $verif_new_email = $_POST['verif_email'];
    if(!empty($new_email)){
        if(filter_var($new_email, FILTER_VALIDATE_EMAIL)){
            if($new_email == $verif_new_email) {   
                $TestEmail = $bdd->query("SELECT id_user FROM users WHERE email='$new_email'");   
                if($TestEmail->rowCount() < 1){
                    $sql_modif = "UPDATE users SET email = :new_email WHERE id_user = '$id_user'";
                    $req = $bdd->prepare($sql_modif);
                    $req->execute(array('new_email'=>$new_email));
                    header("Location: ../modif_profil/modif_profil.php");                   
                }else $return ="L'adresse mail n'est pas identique'";
            }else $return = "Email déjà utilisé"; 
        }else $return ="Le mail n'est pas valable";  
    }else $return = "Champs vide";     
}

if(isset($_POST['new_mdp'])){
        $new_mdp = $_POST['mdp'];
        if(!empty($new_mdp)){
        $repeat_mdp = $_POST['repeat_mdp'];
        if($new_mdp==$repeat_mdp){
            if(preg_match("/^(?=.{8,}$)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?\W).*$/", $new_mdp)){
                $new_mdp = sha1($salt.$new_mdp);
                $sql_modif = "UPDATE users SET mot_de_passe = :new_mdp WHERE id_user = '$id_user'";
                $req = $bdd->prepare($sql_modif);
                $req->execute(array('new_mdp'=>$new_mdp));
                header("Location: ../modif_profil/modif_profil.php");
            }else $return = "Le mot de passe n'est pas assez sécurisé";                        
        }else $return = "Les deux mots de passe de correspondent pas";
    }else $return = "Champs vide"; 
}

if(isset($_POST['new_avatar'])) {

    if(!empty($_FILES)){
        $file_name = $_FILES['image']['name'];
        $file_extension = strrchr($file_name, ".");
        $file_tmp_name = $_FILES['image']['tmp_name'];
        $extension_autorise = array('.jpg', '.JPG', '.png', '.PNG');
        $file_dest = '../img/'.$file_name;
        // Pour afficher la taille maximal accepter par le php.ini, il se trouve à wamp64/bin/php/
        //echo ini_get('upload_max_filesize'); 
    
        if(in_array($file_extension, $extension_autorise)){
            if(move_uploaded_file($file_tmp_name, $file_dest)){
                $req = $bdd->prepare("UPDATE users SET route_avatar = :file_dest WHERE id_user = '$id_user'");
                $req->execute(array('file_dest'=>$file_dest));
            }else $return = "Message ?";
        }else $return = "Seules les images en jpg et png sont autorisées.";
            
        
    }
}

//include("traitement.php"); //a modifier//
//Inscription


// if(isset($_POST['login'])) {
//     header('Location: ../login/index.php';
// }

?>