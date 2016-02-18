<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Téléchargement - Virtuhall</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/download.css">
	</head>
	<body>
		<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
		
		<!-- MENU -->
		<header class="title-box">
			<h1>Téléchargement</h1>
		</header>
		<div class="row" role="main">
			<div class="main column large-12">

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
				<p>Parce que c'est facile et gratuit (et qu'on sait que vous en mourrez d'envie), voici comment télécharger VirtuHall !</p>
				<!-- LEFT -->
				<section class="column large-5">
					<div class="steps">
						<h3>Comment installer le jeu ?</h3>
						<div class="num-circles">1</div><p>S'inscrire sur le site de VirtuHall en remplissant le formulaire d'inscription.</p><br><br>

						<div class="num-circles">2</div><p>Télécharger VirtuHall sur le site en cliquant sur le bouton orange à droite, en veillant à choisir la bonne version (pour en être sûr : Panneau de configuration > Système > Type du système).</p><br><br>

						<div class="num-circles">3</div><p>Dans le dossier de destination de votre téléchargement, lancer le client éxécutable (.exe) et démarrer l'installation.</p><br><br>

						<div class="num-circles">4</div><p>VirtuHall est prêt à être lancé. Bon jeu ! ;)</p><br><br>
					</div>
				</section>

				<!-- RIGHT -->
				<section class="column large-5">
					<div>
						<h3>Je télécharge VirtuHall</h3>
						<button class="dl-btn">
							<p>Télécharger le jeu</p>
							<p>Version Windows (x64)</p>
						</button>

						<button class="dl-btn-vsn">
							<p>Télécharger une autre version</p>
						</button>
					</div>

				</section>

				<!-- ADVERTIZING -->
				<aside class="ad column large-2">
					<p>Je suis une pub yay ;D</p>
				</aside>
			</div>
		</div>

		<!-- FOOTER -->
		<span class="space"><?php include('footer.inc.php'); ?></span>
	</body>
</html>