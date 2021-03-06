<footer class="container" role="contentinfo">
	<div class="vh-menu">
		<ul>
			<span>Accueil</span>
			<li><a href="home.php#actu">Actualités</a></li>
		</ul>

		<ul>
			<span>Le Jeu</span>
			<li><a href="game.php#pres">Présentation</a></li>
			<li><a href="game.php#story">Histoire</a></li>
			<li><a href="download.php">Téléchargement</a></li>
		</ul>

		<ul>
			<span>Média</span>
			<li><a href="media.php#screen">Captures d'écran</a></li>
			<li><a href="media.php#video">Vidéos</a></li>
			<li><a href="media.php#wallpaper">Fonds d'écran</a></li>
		</ul>
		
		<ul>	
			<span>Communauté</span>
			<li><a href="community.php">Réseaux Sociaux</a></li>
		</ul>

		<ul>
			<span>Aide</span>
			<li><a href="help.php#title-box">FAQ</a></li>
			<li><a href="help.php#supp">Support</a></li>
		</ul>
	</div>
	

	<!-- Responsive <480px -->
		<div class="vh-links">
			<p class="sectTitles">VirtuHall, le site</p>
			<ul id="accordions" class="nested">
				<li id="home"  class="sections"><span>Accueil</span>
					<ul id="home-ctnt" class="menu vertical" >
						<li><a href="home.php#actu">Actualités</a></li>
					</ul>
				</li>		

				<li id="game"  class="sections"><span>Le Jeu</span>
					<ul id="game-ctnt" class="menu vertical" >
						<li><a href="game.php#pres">Présentation</a></li>
						<li><a href="game.php#story">Histoire</a></li>
						<li><a href="download.php">Téléchargement</a></li>
					</ul>
				</li>	

				<li id="media" class="sections"><span>Média</span>
					<ul id="media-ctnt" class="menu vertical" >
						<li><a href="media.php#screen">Captures d'écran</a></li>
						<li><a href="media.php#video">Vidéos</a></li>
						<li><a href="media.php#wallpaper">Fonds d'écran</a></li>
					</ul>
				</li>	

				<li id="com" class="sections"><span>Communauté</span>
					<ul id="com-ctnt" class="menu vertical" >
						<li><a href="community.php">Réseaux Sociaux</a></li>
					</ul>
				</li>	

				<li id="help" class="sections"><span>Aide</span>
					<ul id="help-ctnt" class="menu vertical" >
						<li><a href="help.php#title-box">FAQ</a></li>
						<li><a href="help.php#supp">Support</a></li>
					</ul>
				</li>			
			</ul>
		</div>
		<!-- FIN RESP -->

		<div class="wn-links">
			<span class="sectTitles">Wrong Number, l'agence</span>
			<img src="assets/icons/WN_light2.png" class="wn-img" alt="Logo de l'agence Wrong Number" width="200" height="68">
				<ul class="ext-links">
					<li><a href="WrongNumber/">Site internet</a></li>
					<li><a href="assets/files/CGU_WN.pdf">Mentions légales</a></li>
				</ul>

				<ul class="sn-links">
					<li><a href="https://www.facebook.com/VirtuHall-751664391636022/?fref=ts"><div><img src="assets/icons/sn/facebook3.png" alt="" title="Accéder à la page Facebook" width="40" height="40"></div><span class="show-for-sr">Facebook</span></a></li>
					<li><a href="https://twitter.com/virtuhall_game"><div><img src="assets/icons/sn/twitter.png" alt="" title="Accéder à la page Twitter" width="40" height="40"></div><span class="show-for-sr">Twitter</span></a></li>
					<li><a href="https://www.youtube.com/channel/UCNzNSFP1D69-F2sG7sDnVTA"><div><img src="assets/icons/sn/youtube30.png" alt="" title="Accéder à la chaîne YouTube" width="40" height="40"><span class="show-for-sr">YouTube</span></div></a></li>
				</ul>
		</div>
				<div class="wn-rights"><p>© 2015-2016 Wrong Number. VirtuHall est une marque de Wrong Number.</p></div>
		</div>
</footer>

<div class="popup">
	<p class="title">Connexion</p>
	<p id="login-msg"></p>
	<form action="login.php" id="log-in" method="POST">
		<label for="pseudo" class="show-for-sr">Pseudo</label>
	  	<input id="login-pseudo" type="text" name="pseudo" placeholder="Pseudo" required>
		
		<label for="pwd" class="show-for-sr">Mot de passe</label>
	  	<input id="login-pwd" type="password" name="pwd" placeholder="Mot de passe" required>

	  	<input type="submit" name="connexion" class="success button" value="Se connecter">
  	</form>
  <span class="popup-btn-close">✖</span>
</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/login.js"></script>
	<script src="js/footer.js"></script>