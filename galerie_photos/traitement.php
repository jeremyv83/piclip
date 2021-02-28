<?php



require("../baseDeDonnee.php");

include("../poste_coeur/traitement_image.php");

// if(isset($_SESSION["id"])) {
//     $id_user = $_SESSION["id"];
// }else header("Location: ../login/se_connecter.php");



$requete = "SELECT * FROM image INNER JOIN users ON image.id_user = users.id_user ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();


while($date = $sql->fetch())
    {   $requete_coeur = "SELECT * FROM coeur WHERE coeur.id_image = " . $date["id_image"];
        $sql_coeur = $bdd -> prepare($requete_coeur);
        $sql_coeur->execute();
        
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
      
          <?php if (isset($_SESSION['id'])) { ?>
          <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" class="heart" id="form-heart-<?php echo $date['id_image']; ?>">
          <input type="hidden" name="id_image_coeur" value="<?php echo $date['id_image']?>">
          <?php } else { ?>
          <div class="heart">
          <?php }?>
            <div class="nblike"><?php echo count($coeurs_image) ?></div>
            <?php 
              if(isset($_SESSION['id'])) {
                $coeur_html = (array_search($_SESSION['id'], array_column($coeurs_image, 'id_user')) !== false) ?
                '<button class="checked" disabled="true" type="submit"><i class="far fa-heart"></i></button>' : 
                '<button type="submit"><i class="far fa-heart"></i></button>';
              } else {
                $coeur_html = '<i class="far fa-heart"></i>';
              }
              echo $coeur_html;
            ?>
          <?php if (isset($_SESSION['id'])) { ?>
          </form>
          <?php } else { ?>
          </div>
          <?php }?>
      
          <a href="../photo_click/photo_click.php?image=<?php echo $date['id_image']; ?>" title="">
          <p class="overflow-ellipsis"><?php echo $date['description']; ?></p>
        </a>
      </div>
      
      <?php
    }
    

?>