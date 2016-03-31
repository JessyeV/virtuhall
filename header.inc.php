<div id="main-header">
	<nav class="navbar" role="navigation">
		<!-- Responsive <480px -->
		<div class="container-sm">
			<div class="nav-icons">
				<a href="index.php">
					<img class="vh-icon" src="assets/icons/VH-icon.png" alt="Icône du site de VirtuHall" title="Retour à l'accueil" width="50" height="50">
				</a>
				<a>
					<img id="burger-icon" src="assets/icons/mburger.png" alt="Menu de navigation" title="Accéder au menu" width="35" height="23">
				</a>
			</div>

			<?php
			//Vérifier si utilisateur est logged in
			if (isset($_SESSION['pseudo'])) {
				echo('Bienvenue '.$_SESSION['pseudo'].' !');
			}
			else{
				echo('<div class="log">
				<ul>
					<li><a href="signin.php">Inscription</a></li>
					<li><a class="popup-trigger">Connexion</a></li>
				</ul>
				</div>');
			}
			?>

			<!-- <div class="lang">
			 	<ul>
			 		<li class="disabled">fr</li>
			 		<span>|</span>
			 		<li><a href="#" class="underlined">en</a></li>
				</ul>
			</div> -->
			
			<!-- Collapsed menu -->
			<nav class="burger-menu" role="navigation">
				<ul class="inside-burger">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="game.php">Le jeu</a></li>
					<li><a href="media.php">Média</a></li>
					<li><a href="community.php">Communauté</a></li>
					<li><a href="help.php">Aide</a></li>
					<li><a href="signin.php">Télécharger !</a></li>
				</ul>
			</nav>
		</div>

		<!-- Normal size-->
		<div class="container-md-lg">
			<div class="top-nav">
				<a href="index.php">
					<img src="assets/icons/VH-icon.png" alt="Icône du site de VirtuHall" title="Retour à l'accueil">
				</a>
				<ul>
					<li><a href="signin.php">Inscription</a></li>
					<li><a class="popup-trigger">Connexion</a></li>
					<li class="disabled">fr</li>
					<span>|</span>
					<li><a href="#" class="underlined">en</a></li>
				</ul>
			</div>
			
			<div class="mid-nav">
				<ul style="margin-bottom:0px">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="game.php">Le jeu</a></li>
					<li><a href="media.php">Média</a></li>
					<li><a href="community.php">Communauté</a></li>
					<li><a href="help.php">Aide</a></li>
					<li><a href="download.php">Télécharger!</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Detect if the page as the variable homeset, if yes; displays the banner-->
	<?php if(isset($homepage) && $homepage): ?>

	<!-- Parallax banner -->
	<span class="banner-container">
	<div id="prx-container" class="prx-container banner-lg">
		<ul id="scene" class="scene">
			<li class="layer" data-depth="0.00"><img src="assets/images/banner/fond.png"></li>
			<li class="layer resp" data-depth="0.50"><img src="assets/images/banner/feuilles.png"></li>
			<li class="layer resp" data-depth="0.08"><img src="assets/images/banner/tomo.png"></li>
			<li class="layer resp" data-depth="0.30"><img src="assets/images/banner/vh.png"></li>
		</ul>
	</div>
	<div class="banner-sm"><img src="assets/images/banner/banner-sm.png" alt=""></div>
	</span>
	<?php endif; ?>
</div>