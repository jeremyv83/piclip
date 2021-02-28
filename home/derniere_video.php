<?php
require("../baseDeDonnee.php");

include("../poste_coeur/traitement_video.php");

$requete = "SELECT * FROM video INNER JOIN users ON video.id_user = users.id_user ORDER BY date_poste DESC"; 
$sql = $bdd -> prepare($requete);
$sql->execute();

// while  ($date = $sql->fetch())
//     {
//         echo $date['titre'];
//         echo "<br/>";
//     }

for ($i = 0; $i < 4; $i++) {
    $date = $sql->fetch();
  
    $requete_coeur = "SELECT * FROM coeur WHERE coeur.id_video = " . $date["id_video"];
    $sql_coeur = $bdd -> prepare($requete_coeur);
    $sql_coeur->execute();
    
    $coeurs_video = $sql_coeur->fetchAll();
  
  ?>
  
  <div class="card">
    <a href="../video_click/video_click.php?video=<?php echo $date['id_video']; ?>">
      <img src="<?php echo $date['route_minia']; ?>" alt="<?php echo $date['titre']; ?>"/>
      <div class="titre_pseudo">
        <h3 class="titre"><?php echo $date['titre']; ?></h3>
        <h3 class="pseudo">@<?php echo $date['pseudo']; ?></h3>
      </div>
      </a>
  
      <?php if (isset($_SESSION['id'])) { ?>
      <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" class="heart" id="form-heart-<?php echo $date['id_video']; ?>">
      <input type="hidden" name="id_video_coeur" value="<?php echo $date['id_video']?>">
      <?php } else { ?>
      <div class="heart">
      <?php }?>
        <div class="nblike"><?php echo count($coeurs_video) ?></div>
        <?php 
          if(isset($_SESSION['id'])) {
            $coeur_html = (array_search($_SESSION['id'], array_column($coeurs_video, 'id_user')) !== false) ?
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
  
      <a href="../video_click/video_click.php?video=<?php echo $date['id_video']; ?>" title="">
      <p class="overflow-ellipsis"><?php echo $date['description']; ?></p>
    </a>
  </div>
  
  <?php
  }