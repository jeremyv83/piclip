<?php

require("../baseDeDonnee.php");
var_dump($_FILES);
if(isset($_POST['submit'])) {

    $titre = $_POST['titre'];
    $description = $_POST['description'];


    if(!empty($_FILES)){
        $file_name = $_FILES['image']['name'];
        $file_extension = strrchr($file_name, ".");
        $file_tmp_name = $_FILES['image']['tmp_name'];
        $extension_autorise = array('.jpg', '.JPG', '.png', '.PNG');
        $file_dest = '../poste/image/'.$file_name;
        var_dump($_FILES);
        // Pour afficher la taille maximal accepter par le php.ini, il se trouve à wamp64/bin/php/
        //echo ini_get('upload_max_filesize'); 
    
        if(in_array($file_extension, $extension_autorise)){
            if(move_uploaded_file($file_tmp_name, $file_dest)){
                $req = $bdd->prepare("INSERT INTO image(titre, description, route_image) VALUES (:titre, :description, :file_dest)");
                $req->execute(array(
                    'titre' => $titre,
                    'description' => $description,
                    'file_dest' => $file_dest,
                ));
                echo "l'image à bien été envoyé";
            }
        }else{
            echo "Seules les images en jpg et png sont autorisées.";
        }
    }
}


?>