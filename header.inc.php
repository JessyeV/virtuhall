		<div id="main-header">
		<nav class="navbar" role="navigation">		
<!-- Responsive <480px -->
			<div class="container-sm">
				<div class="nav-icons">
					<a href="#">
						<img class="vh-icon" src="assets/icons/VH-icon.png" alt="Icône du site de VirtuHall" title="Retour à l'accueil">
					</a>
					<a href="#">
						<img id="burger-icon" src="assets/icons/mburger.png" alt="Menu de navigation" title="Accéder au menu">
					</a>
				</div>

				<div class="log">
					<ul>
						<li><a href="#">Inscription</a></li>
						<li><a href="#">Connexion</a></li>
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
						<li><a href="#">Accueil</a></li>
						<li><a href="#">Le jeu</a></li>
						<li><a href="#">Média</a></li>
						<li><a href="#">Communauté</a></li>
						<li><a href="#">Aide</a></li>
						<li><a href="#">Jouez !</a></li>
					</ul>
				</nav>
			</div>

			<div class="container-md-lg">
				<div class="top-nav">
					<a href="#">
						<img src="assets/icons/VH-icon.png" alt="Icône du site de VirtuHall" title="Retour à l'accueil">
					</a>
					<ul>
						<li><a href="#">Inscription</a></li>
						<li><a href="#">Connexion</a></li>
						<li class="disabled">fr</li>
						<span>|</span>
						<li><a href="#" class="underlined">en</a></li>
					</ul>
				</div>
				
				<div class="mid-nav">
					<ul>
						<li><a href="#">Accueil</a></li>
						<li><a href="#">Le jeu</a></li>
						<li><a href="#">Média</a></li>
						<li><a href="#">Communauté</a></li>
						<li><a href="#">Aide</a></li>
						<li><a href="#">Jouez!</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<span class="banner-container">
			<img class="banner-sm" src="assets/images/banner-sm.png"
			alt="">
			<img class="banner-md" src="assets/images/banner-md.png"
			alt="">
			<img class="banner-lg" src="assets/images/banner-lg.png"
			alt="">
		</span>
		</div>

		<script src="dev/foundation-6/js/jquery/jquery.min.js"></script>
		<script>
		  $('#burger-icon').on('click',function(){
			$('.burger-menu').slideToggle('200');
			});
		</script>