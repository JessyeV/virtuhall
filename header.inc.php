<div id="main-header">
	<nav class="navbar" role="navigation">
		<!-- Responsive <480px -->
		<div class="container-sm">
			<div class="nav-icons">
				<a href="home.php">
					<img class="vh-icon" src="assets/icons/VH-icon.png" alt="Icône du site de VirtuHall" title="Retour à l'accueil">
				</a>
				<a>
					<img id="burger-icon" src="assets/icons/mburger.png" alt="Menu de navigation" title="Accéder au menu">
				</a>
			</div>
			<div class="log">
				<ul>
					<li><a href="signin.php">Inscription</a></li>
					<li><a class="popup-trigger">Connexion</a></li>
				</ul>
			</div>
			<div class="lang">
				<ul>
					<li class="disabled">fr</li>
					<span>|</span>
					<li><a href="#" class="underlined">en</a></li>
				</ul>
			</div>
			
			<nav class="burger-menu" role="navigation">
				<ul class="inside-burger">
					<li><a href="home.php">Accueil</a></li>
					<li><a href="game.php">Le jeu</a></li>
					<li><a href="media.php">Média</a></li>
					<li><a href="community.php">Communauté</a></li>
					<li><a href="help.php">Aide</a></li>
					<li><a href="signin.php">Télécharger!</a></li>
				</ul>
			</nav>
		</div>

		<!-- Normal size-->
		<div class="container-md-lg">
			<div class="top-nav">
				<a href="home.php">
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
					<li><a href="home.php">Accueil</a></li>
					<li><a href="game.php">Le jeu</a></li>
					<li><a href="media.php">Média</a></li>
					<li><a href="community.php">Communauté</a></li>
					<li><a href="help.php">Aide</a></li>
					<li><a href="download.php">T<span class="forte">é</span>l<span class="forte">é</span>charg<span class="forte">e</span>r!</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<?php if(isset($homepage) && $homepage): ?>
	<span class="banner-container">
		<img class="banner-md" src="assets/images/banner-md.png"
		alt="">
		<img class="banner-lg" src="assets/images/banner-lg.png"
		alt="">
	</span>
	<?php endif; ?>
</div>