<header>
        <a href="../bienvenue/index.html"><img src="../img/Plan de travail 6.png" alt=""/></a>
            <a href="../home/home.php">Accueil</a>
            <a href="../galerie/galerie.php">Galerie</a>
            <a <?php if(isset($_SESSION['id'])){echo 'href="../deconnexion.php"> Se déconnecter'; }else{echo 'href="../login/se_connecter.php"> Se connecter';} ?> </a>
            <a <?php if(isset($_SESSION['id'])){echo 'href="../profil/profil.php"> Profil'; }else{echo 'href="../inscription/formulaire_inscription.php"> Inscription';} ?> </a>
</header>
