	<header>
		<a href="../bienvenue/bienvenue.html"><img src="../img/Plan de travail 6.png" alt=""/></a>
			<a href="../home/home.html">Home</a>
			<a href="../galerie/galerie.html">Galerie</a>
			<a <?php if($_SESSION['id']){echo 'href="../deconnexion.php"> Se déconnecter'; }else{echo 'href="../login/se_connecter.php"> Se connecter';} ?></a>
			<a href="../inscription/formulaire_inscription.php">S'inscrire</a>
	</header>