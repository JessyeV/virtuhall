<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Communauté - Virtuhall</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/community.css">
	</head>
	<body>
		<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
		
		<!-- MENU -->
		<header class="title-box">
			<h1>Communauté</h1>
		</header>
		<div class="row" role="main">
			<div class="main column large-12">

				<!-- BREADCRUMB -->
				<nav aria-label="Vous êtes ici:" role="navigation">
					<ul class="breadcrumbs">
						<li><a href="#">Accueil</a></li>
						<li>
							<span class="show-for-sr">Page actuelle: </span>Communauté
						</li>
					</ul>
				</nav>

				<!-- MAIN -->
				<h2>Réseaux sociaux</h2>
				<!-- LEFT -->
				<section class="sn-divs column large-5">
					<div>
						<a href="https://www.facebook.com/VirtuHall-751664391636022/?fref=ts"><img src="assets/images/commu/fb-page-no-border.png" alt="Lien vers la page facebook de VirtuHall"></a>
					</div>
					<div>
						<img src="assets/images/commu/snap-page-no-border.png" alt="Rechercher le nom Virtuhall pour l'ajouter à vos contacts Snapchat">
					</div>
				</section>

				<!-- RIGHT -->
				<section class="sn-divs column large-5">
					<div>
						<a href="https://twitter.com/virtuhall_game"><img src="assets/images/commu/twitter-page-no-border.png" alt="Lien vers la page Twitter de VirtuHall"></a>
					</div>
					<div>
						<img src="assets/images/commu/twitter-page.png" alt="">
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
		<script src="js/jquery.min.js"></script>
	</body>
</html>