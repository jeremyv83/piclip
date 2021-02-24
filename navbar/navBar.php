<header>
			<img src="../img/Plan de travail 6.png" alt="" />
			<a href="">Home</a>
			<a href="">Galerie</a>
			<a <?php if(isset($_SESSION['id'])){echo 'href="../deconnexion.php"> Se déconnecter'; }else{echo 'href="../login/se_connecter.php"> Se connecter';} ?> </a>
			<a href="../inscription/formulaire_inscription.php">S'inscrire</a>
		</header>