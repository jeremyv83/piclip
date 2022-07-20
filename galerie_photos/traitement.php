<?php

require("../baseDeDonnee.php");

include("../poste_coeur/traitement_image.php");

// requête sélectionne tout de la table "image" qui est en commun avec la table "users" entre "id_user" de la table "image" et "id_user" de la table "user"  rangé du poste le plus récent au poste le plus ancien.
// récupère tout simplement tous les postes avec toutes les informations associées à chacun d'entre eux.
$requete = "SELECT * FROM image INNER JOIN users ON image.id_user = users.id_user ORDER BY date_poste DESC"; 
// prépare la requête
$sql = $bdd -> prepare($requete);
// exécute la requête
$sql->execute();

// je boucle tant qu'il y a des images postées, j'arrête d'afficher quand il n'y en a plus.
while($date = $sql->fetch())
        // requête SQL,  sélectionne tout dans la table "coeur" quand id_image de la table "coeur" = à "id_image" dans le tableau précédent
    {   $requete_coeur = "SELECT * FROM coeur WHERE coeur.id_image = " . $date["id_image"];
        // prépare la requête
        $sql_coeur = $bdd -> prepare($requete_coeur);
        // exécute la requête
        $sql_coeur->execute();
        
        //récupère un tableau de toutes les images avec ou sans coeur dans lequel il y a toutes les informations concernant les coeurs.
        $coeurs_image = $sql_coeur->fetchAll();
      
      ?>
      
      <div class="card">
        <a href="../photo_click/photo_click.php?image=<?php echo $date['id_image']; ?>">
          <img src="<?php echo $date['route_image']; ?>" alt="<?php echo $date['titre']; ?>"/>
          <div class="titre_pseudo">
            <h3 class="titre"><?php echo $date['titre']; ?></h3>
            <h3 class="pseudo">@<?php echo $date['pseudo']; ?></h3>
          </div>
          </a>

          <!-- si l'utilisateur est connecté, il peut avoir accès à la fonctionnalité de pouvoir ajouter des coeurs-->
          <?php if (isset($_SESSION['id'])) { ?>
          <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" class="heart" id="form-heart-<?php echo $date['id_image']; ?>">
          <input type="hidden" name="id_image_coeur" value="<?php echo $date['id_image']?>">
          <?php } else { ?>
          <div class="heart">
          <?php }?>
            <div class="nblike"><?php echo count($coeurs_image) ?></div>
            <?php 
              // recherche si le coeur a déjà était cliqué, pour qu'un utilisateur ne puisse pas mettre plusieurs coeurs
              if(isset($_SESSION['id'])) {
                // On recherche si la variable $coeur_html se trouve dans le tableau, dans la colonne correspondante si la valeur est différente de "faux"
                // Donc si il l'utilisateur a déjà coché le coeur
                $coeur_html = (array_search($_SESSION['id'], array_column($coeurs_image, 'id_user')) !== false) ?
                // Si c'est le cas alors, j'applique la classe "checked" (pour le css) et disabled="true" qu'on ne puisse plus cliquer dessus 
                '<button class="checked" disabled="true" type="submit"><i class="far fa-heart"></i></button>' : 
                '<button type="submit"><i class="far fa-heart"></i></button>';
              } else {
                // Si ce n'est pas le cas, c'est à dire, si l'utilisateur n'a pas encore cliqué sur ce coeur, j'affiche tout simplement le coeur 
                $coeur_html = '<i class="far fa-heart"></i>';
              }
              echo $coeur_html;
            ?>
          <?php if (isset($_SESSION['id'])) { ?>
          </form>
          <?php } else { ?>
          </div>
          <?php }?>
      
          <!-- Redirection si l'utilisateur clique sur la description -->
          <a href="../photo_click/photo_click.php?image=<?php echo $date['id_image']; ?>" title="">
          <p class="overflow-ellipsis"><?php echo $date['description']; ?></p>
        </a>
      </div>
      
      <?php
    }
    

?>