<?php
session_start();
require("../baseDeDonnee.php");

if(isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}else header("Location: ../login/se_connecter.php");

$RecupPseudo = $bdd->query("SELECT * FROM users WHERE id_user = '$id_user'");
$UserData = $RecupPseudo->fetch();
$pseudo = $UserData['pseudo'];

if(isset($_POST['submit'])) {
    date_default_timezone_set('Europe/Paris');
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $date_poste = date('Y-m-d H:i:s');

    if(!empty($_FILES)){
        $file_name_video = $_FILES['video']['name'];
        $file_name_minia = $_FILES['minia']['name'];

        $file_extension_video = strrchr($file_name_video, ".");
        $file_extension_minia = strrchr($file_name_minia, ".");

        $file_tmp_name_video = $_FILES['video']['tmp_name'];
        $file_tmp_name_minia = $_FILES['minia']['tmp_name'];

        $extension_autorise_video = array('.mp4', '.MP4');
        $extension_autorise_minia = array('.jpg', '.JPG', '.png', '.PNG');

        $file_dest_video = '../poste/video/'.$file_name_video;
        $file_dest_minia = '../poste/video/miniature/'.$file_name_minia;
    
        // Pour afficher la taille maximal accepter par le php.ini, il se trouve à wamp64/bin/php/
        //echo ini_get('upload_max_filesize'); 
    
        if((in_array($file_extension_video, $extension_autorise_video)) && (in_array($file_extension_minia, $extension_autorise_minia))){
            if((move_uploaded_file($file_tmp_name_video, $file_dest_video)) && (move_uploaded_file($file_tmp_name_minia, $file_dest_minia))){
                $req = $bdd->prepare("INSERT INTO video(id_user, titre, description, route_video, route_minia, date_poste) VALUES (:id_user, :titre, :description, :file_dest_video, :file_dest_minia, :date_poste)");
                $req->execute(array(
                    'id_user' => $id_user,
                    'titre' => $titre,
                    'description' => $description,
                    'file_dest_video' => $file_dest_video,
                    'file_dest_minia' => $file_dest_minia,
                    'date_poste' => $date_poste,
                ));
               
            }
        }else{
            $return = "Seules les images en jpg et png et les vidéos en mp4 sont autorisées.";
        }
    }
}

?>