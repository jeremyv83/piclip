<?php
session_start();
require("../baseDeDonnee.php");

if(isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}else header("Location: ../login/se_connecter.php");

if(isset($_POST['submit'])) {

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $date_poste = date('y-m-d');


    if(!empty($_FILES)){
        $file_name = $_FILES['image']['name'];
        $file_extension = strrchr($file_name, ".");
        $file_tmp_name = $_FILES['image']['tmp_name'];
        $extension_autorise = array('.jpg', '.JPG', '.png', '.PNG');
        $file_dest = '../poste/image/'.$file_name;
       
        // Pour afficher la taille maximal accepter par le php.ini, il se trouve à wamp64/bin/php/
        //echo ini_get('upload_max_filesize'); 
    
        if(in_array($file_extension, $extension_autorise)){
            if(move_uploaded_file($file_tmp_name, $file_dest)){
                $req = $bdd->prepare("INSERT INTO image(id_user, titre, description, route_image, date_poste) VALUES (:id_user, :titre, :description, :file_dest, :date_poste)");
                $req->execute(array(
                    'id_user'=> $id_user,
                    'titre' => $titre,
                    'description' => $description,
                    'file_dest' => $file_dest,
                    'date_poste' => $date_poste,
                ));
                
            }
        }else $return = "Seules les images en jpg et png sont autorisées.";
        
    }
}

    if(isset($_POST["previsu"])){
        var_dump($_FILES);
    }
// if(isset($_POST["image"])){
//     // $file_name = $_FILES['image']['name'];
//     // $file_extension = strrchr($file_name, ".");
//      $file_tmp_name = $_FILES['image']['tmp_name'];
//     // $extension_autorise = array('.jpg', '.JPG', '.png', '.PNG');
//     // $file_dest = '../poste/image/'.$file_name;
//     // if(in_array($file_extension, $extension_autorise)){

//     // }
//     echo $file_tmp_name;
// }


?>