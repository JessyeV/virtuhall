<?php session_start(); ?>
<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Parce que c'est facile et gratuit, voici tout ce qu'il vous faut pour télécharger VirtuHall le jeu !" />
		<title>VirtuHall le jeu - Téléchargement</title>
		<link rel="icon" type="image/png" href="assets/favicon.png" />
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/download.css">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
		<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
		
		<!-- MENU -->
		<header class="title-box">
			<h1>Téléchargement</h1>
		</header>
		<div class="row" role="main">
			<div class="main column large-offset-1 large-10">

				<!-- BREADCRUMB -->
				<nav aria-label="Vous êtes ici:" role="navigation">
					<ul class="breadcrumbs">
						<li><a href="#">Accueil</a></li>
						<li>
							<span class="show-for-sr">Page actuelle: </span>
							Téléchargement
						</li>
					</ul>
				</nav>

				<!-- MAIN -->
				<h2>Télécharger VirtuHall</h2>
				<p>Parce que c'est facile et gratuit (et qu'on sait que vous en mourrez d'envie), voici tout le nécessaire pour télécharger VirtuHall !</p>

				<section class="column large-10">
					<!-- LEFT -->
					<div class="steps column large-7">
						<h3>Comment installer le jeu ?</h3>
						<div class="num-circles">1</div><p>S'inscrire sur le site de VirtuHall en remplissant le formulaire d'inscription.</p><br><br>

						<div class="num-circles">2</div><p>Télécharger VirtuHall sur le site en cliquant sur le bouton vert à droite, en veillant à choisir la bonne version (pour Windows : Panneau de configuration > Système > Type du système).</p><br><br>

						<div class="num-circles">3</div><p>Dans le dossier de destination de votre téléchargement, lancer le client éxécutable (.exe) et démarrer l'installation.</p><br><br>

						<div class="num-circles">4</div><p>VirtuHall est prêt à être lancé. Bon jeu ! ;)</p><br><br>
					</div>

					<!-- RIGHT -->
					<div class="column large-5">
					<h3>Je télécharge VirtuHall</h3>
					<!--Commenté en attente de l'upload du jeu -->
						<button class="dl-btn">
							<img class="dl-img" src="assets/icons/dl-32.png" alt="">
							<!-- <p>Télécharger le jeu</p>
							<p>Version Windows (x64)</p> -->
							<p>Bientôt disponible !</p>
						</button>
						
						<!-- <div class="dl-btn-vsn">
							<p>Télécharger une autre version</p>
							
							<ul id="dl-versions">
								<li><img src="assets/icons/dl/windows.png" alt=""><a href="#">Version Windows (x32)</a></li>
								<li><img src="assets/icons/dl/apple.png" alt=""><a href="#">Version Mac</a></li>
								<li><img src="assets/icons/dl/linux.png" alt=""><a href="#">Version Linux</a></li>
							</ul>
						</div> -->
					</div>
				</section>

				<!-- ADVERTIZING -->
				<aside class="aside column large-2">
					<ins class="ad-vertical adsbygoogle"
    					style="display:inline-block;width:160px;height:600px;"
    					data-ad-client="ca-pub-8371934832180859"
    					data-ad-slot="1415884923">
    				</ins>

					<ins class="ad-horizontal adsbygoogle"
     					style="display:block"
     					data-ad-client="ca-pub-8371934832180859"
     					data-ad-slot="2868717721"
     					data-ad-format="link">
     				</ins>
				</aside>
			</div>
		</div>

		<!-- FOOTER -->
		<span class="space"><?php include('footer.inc.php'); ?></span>

		<!-- SCRIPT -->
		<script src="js/download.js"></script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</body>
</html>